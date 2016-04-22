<?php namespace NITH\DeptStuAct\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Dept Activities Back-end Controller
 */
class DeptActivities extends Controller
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

        BackendMenu::setContext('NITH.Departments', 'departments', 'deptstuact');
    }
}