<?php namespace NITH\Events;

use Backend;
use System\Classes\PluginBase;

/**
 * Events Plugin Information File
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
            'name'        => 'Events',
            'description' => 'Events managements...',
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
            'NITH\Events\Components\MyComponent' => 'myComponent',
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
            'nith.events.some_permission' => [
                'tab' => 'Events',
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
        return [];

        return [
            'events' => [
                'label'       => 'Events',
                'url'         => Backend::url('nith/events/events'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.events.*'],
                'order'       => 500,
            ],
        ];
    }

}
