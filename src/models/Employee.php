<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 15:29:11
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-19 18:56:10
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class Employee extends BaseModel
{
    /**
     * @var
     */
    public $EmployeeId;
    /**
     * @var
     */
    public $PersonalIdentityNumber;
    /**
     * @var
     */
    public $FirstName;
    /**
     * @var
     */
    public $LastName;
    /**
     * @var
     */
    public $FullName;
    /**
     * @var
     */
    public $Address1;
    /**
     * @var
     */
    public $Address2;
    /**
     * @var
     */
    public $PostCode;
    /**
     * @var
     */
    public $City;
    /**
     * @var
     */
    public $Country;
    /**
     * @var
     */
    public $Phone1;
    /**
     * @var
     */
    public $Phone2;
    /**
     * @var
     */
    public $Email;
    /**
     * @var
     */
    public $EmploymentDate;
    /**
     * @var
     */
    public $EmploymentForm;
    /**
     * @var
     */
    public $SalaryForm;
    /**
     * @var
     */
    public $JobTitle;
    /**
     * @var
     */
    public $PersonelType;
    /**
     * @var
     */
    public $ScheduleId;
    /**
     * @var
     */
    public $ForaType;
    /**
     * @var
     */
    public $MonthlySalary;
    /**
     * @var
     */
    public $HourlyPay;
    /**
     * @var
     */
    public $TaxAllowance;
    /**
     * @var
     */
    public $TaxTable;
    /**
     * @var
     */
    public $TaxColumn;
    /**
     * @var
     */
    public $AutoNonRecurringTax;
    /**
     * @var
     */
    public $NonRecurringTax;
    /**
     * @var
     */
    public $Inactive;
    /**
     * @var
     */
    public $ClearingNo;
    /**
     * @var
     */
    public $BankAccountNo;
    /**
     * @var
     */
    public $EmployedTo;
    /**
     * @var
     */
    public $AverageWeeklyHours;
    /**
     * @var
     */
    public $AverageHourlyWage;
}
