<?php namespace NITH\Projects;

use Backend;
use System\Classes\PluginBase;

/**
 * Projects Plugin Information File
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
            'name'        => 'Projects',
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
            'NITH\Projects\Components\MyComponent' => 'myComponent',
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
            'nith.projects.some_permission' => [
                'tab' => 'Projects',
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
            'projects' => [
                'label'       => 'Projects',
                'url'         => Backend::url('nith/projects/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.projects.*'],
                'order'       => 500,
            ],
        ];
    }

}
