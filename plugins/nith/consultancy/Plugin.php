<?php namespace NITH\Consultancy;

use Backend;
use System\Classes\PluginBase;

/**
 * Consultancy Plugin Information File
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
            'name'        => 'Consultancy',
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
            'NITH\Consultancy\Components\MyComponent' => 'myComponent',
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
            'nith.consultancy.some_permission' => [
                'tab' => 'Consultancy',
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
            'consultancy' => [
                'label'       => 'Consultancy',
                'url'         => Backend::url('nith/consultancy/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.consultancy.*'],
                'order'       => 500,
            ],
        ];
    }

}
