<?php namespace NITH\Profiles\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Profiles Back-end Controller
 */
class Profiles extends Controller
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

        BackendMenu::setContext('NITH.People', 'people', 'profiles');
    }
}