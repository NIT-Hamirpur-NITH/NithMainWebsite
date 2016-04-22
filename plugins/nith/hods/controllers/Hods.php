<?php namespace NITH\Hods\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Hods Back-end Controller
 */
class Hods extends Controller
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

        BackendMenu::setContext('NITH.Hods', 'hods', 'hods');
    }
}