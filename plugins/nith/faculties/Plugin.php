<?php namespace NITH\Faculties;

use Backend;
use System\Classes\PluginBase;

/**
 * Faculties Plugin Information File
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
            'name'        => 'Faculties',
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
            'NITH\Faculties\Components\MyComponent' => 'myComponent',
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
            'nith.faculties.some_permission' => [
                'tab' => 'Faculties',
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
            'faculties' => [
                'label'       => 'Faculties',
                'url'         => Backend::url('nith/faculties/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.faculties.*'],
                'order'       => 500,
            ],
        ];
    }

}
