<?php namespace NITH\DeptDetails\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Dept Details Back-end Controller
 */
class DeptDetails extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('NITH.Departments', 'departments', 'deptdetails');
    }
}