<?php namespace NITH\DGallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * D Galleries Back-end Controller
 */
class DGalleries extends Controller
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

        BackendMenu::setContext('NITH.DGallery', 'dgallery', 'dgalleries');
    }
}