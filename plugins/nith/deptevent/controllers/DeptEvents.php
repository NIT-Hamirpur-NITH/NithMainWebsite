<?php namespace NITH\DeptEvent\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Dept Events Back-end Controller
 */
class DeptEvents extends Controller
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

        BackendMenu::setContext('NITH.Departments', 'departments', 'deptevents');
    }
}