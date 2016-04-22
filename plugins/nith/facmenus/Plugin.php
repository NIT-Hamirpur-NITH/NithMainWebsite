<?php namespace NITH\Facmenus;

use Backend;
use System\Classes\PluginBase;

/**
 * Facmenus Plugin Information File
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
            'name'        => 'Facmenus',
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
            'NITH\Facmenus\Components\MyComponent' => 'myComponent',
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
            'nith.facmenus.some_permission' => [
                'tab' => 'Facmenus',
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
            'facmenus' => [
                'label'       => 'Facmenus',
                'url'         => Backend::url('nith/facmenus/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.facmenus.*'],
                'order'       => 500,
            ],
        ];
    }

}
