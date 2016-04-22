<?php namespace NITH\Consultancy\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Consultancy Back-end Controller
 */
class Consultancy extends Controller
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

        BackendMenu::setContext('NITH.Consultancy', 'consultancy', 'consultancy');
    }
}