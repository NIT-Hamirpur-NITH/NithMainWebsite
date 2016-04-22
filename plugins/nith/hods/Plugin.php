<?php namespace NITH\Hods;

use Backend;
use System\Classes\PluginBase;

/**
 * Hods Plugin Information File
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
            'name'        => 'Hods',
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
            'NITH\Hods\Components\MyComponent' => 'myComponent',
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
            'nith.hods.some_permission' => [
                'tab' => 'Hods',
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
            'hods' => [
                'label'       => 'Hods',
                'url'         => Backend::url('nith/hods/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.hods.*'],
                'order'       => 500,
            ],
        ];
    }

}
