<?php namespace NITH\Sponsered\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Sponsered Pros Back-end Controller
 */
class SponseredPros extends Controller
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

        BackendMenu::setContext('NITH.Sponsered', 'sponsered', 'sponseredpros');
    }
}