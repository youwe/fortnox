<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-26 14:34:02
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\EmployeeRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Employee;

/**
 * Class EmployeeApi
 * @package hmphu\fortnox\api
 */
class EmployeeApi extends ApiAbstract implements ApiInterface
{
	/**
	 * @param $page Current page
	 * @param $limit Total items per page
	 * @param $query Search & Filters param
     * @return array of employees
     */
    public function all($page = 0, $limit = 10, $query = []) {
    	$request = new PaginatedRequest($page, $limit, $query);
        $datas = $this->getPaginated('/employees', $request, 'Employees');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Employee($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $employeeNumber
     * @return object employee
     */
    public function get($employeeNumber) {
    	$request = new EmployeeRequest();
        $data = $this->callJson('/employees/' . $employeeNumber, $request, 'Employee');
        if(is_array($data)){
        	return new Employee($data);
        }
    }
    
    /**
     * @param object $data employee data
     * @return object employee
     */
    public function create(BaseModel $data){
    	$request = new EmployeeRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/employees', $request, 'Employee');
        if(is_array($data)){
        	return new Employee($data);
        }
    }

     /**
     * @param int $employeeNumber
     * @param object $data
     * @return object employee
     */
    public function update($employeeNumber, BaseModel $data) {
    	$request = new EmployeeRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/employees/' . $employeeNumber, $request, 'Employee');
        if(is_array($data)){
        	return new Employee($data);
        }
    }

    /**
     * @param $employeeNumber
     * @return string response body
     */
    public function delete($employeeNumber) {
    	$request = new EmployeeRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/employees/' . $employeeNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }
}