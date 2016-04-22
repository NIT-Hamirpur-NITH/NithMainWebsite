<?php namespace NITH\DeptDetails;

use Backend;
use System\Classes\PluginBase;

/**
 * DeptDetails Plugin Information File
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
            'name'        => 'DeptDetails',
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
            'NITH\DeptDetails\Components\MyComponent' => 'myComponent',
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
            'nith.deptdetails.some_permission' => [
                'tab' => 'DeptDetails',
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
            'deptdetails' => [
                'label'       => 'DeptDetails',
                'url'         => Backend::url('nith/deptdetails/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.deptdetails.*'],
                'order'       => 500,
            ],
        ];
    }

}
