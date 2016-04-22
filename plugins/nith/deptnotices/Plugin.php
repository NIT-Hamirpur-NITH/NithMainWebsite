<?php namespace NITH\DeptNotices;

use Backend;
use System\Classes\PluginBase;

/**
 * DeptNotices Plugin Information File
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
            'name'        => 'DeptNotices',
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
            'NITH\DeptNotices\Components\MyComponent' => 'myComponent',
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
            'nith.deptnotices.some_permission' => [
                'tab' => 'DeptNotices',
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
            'deptnotices' => [
                'label'       => 'DeptNotices',
                'url'         => Backend::url('nith/deptnotices/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.deptnotices.*'],
                'order'       => 500,
            ],
        ];
    }

}
