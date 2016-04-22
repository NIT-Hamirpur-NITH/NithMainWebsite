<?php namespace NITH\Facmenus\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Facmenus Back-end Controller
 */
class Facmenus extends Controller
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

        BackendMenu::setContext('NITH.Facmenus', 'facmenus', 'facmenus');
    }
}