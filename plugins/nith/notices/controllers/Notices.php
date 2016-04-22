<?php namespace NITH\Notices\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Notices Back-end Controller
 */
class Notices extends Controller
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

        BackendMenu::setContext('NITH.Home', 'home', 'notices');
    }
}
