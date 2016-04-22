<?php namespace NITH\DeptStuAct;

use Backend;
use System\Classes\PluginBase;

/**
 * DeptStuAct Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'DeptStuAct',
            'description' => 'No description provided yet...',
            'author'      => 'NITH',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'NITH\DeptStuAct\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'nith.deptstuact.some_permission' => [
                'tab' => 'DeptStuAct',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'deptstuact' => [
                'label'       => 'DeptStuAct',
                'url'         => Backend::url('nith/deptstuact/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.deptstuact.*'],
                'order'       => 500,
            ],
        ];
    }

}
