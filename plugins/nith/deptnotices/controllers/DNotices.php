<?php namespace NITH\DeptNotices\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * D Notices Back-end Controller
 */
class DNotices extends Controller
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

        BackendMenu::setContext('NITH.Departments', 'departments', 'deptnotices');
    }
}