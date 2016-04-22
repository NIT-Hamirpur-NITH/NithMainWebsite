<?php namespace NITH\Sponsered;

use Backend;
use System\Classes\PluginBase;

/**
 * Sponsered Plugin Information File
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
            'name'        => 'Sponsered',
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
            'NITH\Sponsered\Components\MyComponent' => 'myComponent',
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
            'nith.sponsered.some_permission' => [
                'tab' => 'Sponsered',
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
            'sponsered' => [
                'label'       => 'Sponsered',
                'url'         => Backend::url('nith/sponsered/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.sponsered.*'],
                'order'       => 500,
            ],
        ];
    }

}
