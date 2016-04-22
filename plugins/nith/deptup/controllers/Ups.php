<?php namespace NITH\DeptUp\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Ups Back-end Controller
 */
class Ups extends Controller
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

        BackendMenu::setContext('NITH.Departments', 'departments', 'deptup');
    }
}