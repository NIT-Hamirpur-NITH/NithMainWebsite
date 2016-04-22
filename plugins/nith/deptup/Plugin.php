<?php namespace NITH\DeptUp;

use Backend;
use System\Classes\PluginBase;

/**
 * DeptUp Plugin Information File
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
            'name'        => 'DeptUp',
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
            'NITH\DeptUp\Components\MyComponent' => 'myComponent',
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
            'nith.deptup.some_permission' => [
                'tab' => 'DeptUp',
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
            'deptup' => [
                'label'       => 'DeptUp',
                'url'         => Backend::url('nith/deptup/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.deptup.*'],
                'order'       => 500,
            ],
        ];
    }

}
