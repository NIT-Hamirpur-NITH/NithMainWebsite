<?php namespace NITH\DeptEvent;

use Backend;
use System\Classes\PluginBase;

/**
 * DeptEvent Plugin Information File
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
            'name'        => 'DeptEvent',
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
            'NITH\DeptEvent\Components\MyComponent' => 'myComponent',
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
            'nith.deptevent.some_permission' => [
                'tab' => 'DeptEvent',
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
            'deptevent' => [
                'label'       => 'DeptEvent',
                'url'         => Backend::url('nith/deptevent/deptevents'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.deptevent.*'],
                'order'       => 500,
            ],
        ];
    }

}
