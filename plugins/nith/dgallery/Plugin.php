<?php namespace NITH\DGallery;

use Backend;
use System\Classes\PluginBase;

/**
 * DGallery Plugin Information File
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
            'name'        => 'DGallery',
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
            'NITH\DGallery\Components\MyComponent' => 'myComponent',
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
            'nith.dgallery.some_permission' => [
                'tab' => 'DGallery',
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
            'dgallery' => [
                'label'       => 'DGallery',
                'url'         => Backend::url('nith/dgallery/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.dgallery.*'],
                'order'       => 500,
            ],
        ];
    }

}
