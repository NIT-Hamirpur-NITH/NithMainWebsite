<?php namespace NITH\DeptMenu;

use Backend;
use System\Classes\PluginBase;

/**
 * DeptMenu Plugin Information File
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
            'name'        => 'DeptMenu',
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
            'NITH\DeptMenu\Components\MyComponent' => 'myComponent',
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
            'nith.deptmenu.some_permission' => [
                'tab' => 'DeptMenu',
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
            'deptmenu' => [
                'label'       => 'DeptMenu',
                'url'         => Backend::url('nith/deptmenu/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.deptmenu.*'],
                'order'       => 500,
            ],
        ];
    }

}
