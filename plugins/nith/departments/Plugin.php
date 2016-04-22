<?php namespace NITH\Departments;

use Backend;
use System\Classes\PluginBase;

/**
 * Departments Plugin Information File
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
            'name'        => 'Departments',
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
            'NITH\Departments\Components\MyComponent' => 'myComponent',
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
            'nith.departments.some_permission' => [
                'tab' => 'Departments',
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
        return [
            'departments' => [
                'label'       => 'Departments',
                'url'         => Backend::url('nith/departments/departments'),
                'icon'        => 'icon-leaf',
                'permissions' => ['nith.departments.*'],
                'order'       => 500, 
                'sideMenu' => [
                    'deptdetails' => [
                        'label'       => 'DeptDetails',
                        'url'         => Backend::url('nith/deptdetails/deptdetails'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.deptdetails.*'],
                        'order'       => 500,
                    ],
                    'labs' => [
                        'label'       => 'Labs',
                        'url'         => Backend::url('nith/labs/labs'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.labs.*'],
                        'order'       => 500,
                    ],
                    'projects' => [
                        'label'       => 'Projects',
                        'url'         => Backend::url('nith/projects/projects'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.projects.*'],
                        'order'       => 500,
                    ],
                    'projectsessions' => [
                        'label'       => 'Projects Session',
                        'url'         => Backend::url('nith/projects/projectsessions'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.projects.*'],
                        'order'       => 500,
                    ],
                    'deptstuact' => [
                        'label'       => 'Student Activity',
                        'url'         => Backend::url('nith/deptstuact/deptactivities'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.deptstuact.*'],
                        'order'       => 500,
                    ],
                    'deptevents' => [
                        'label'       => 'Events',
                        'url'         => Backend::url('nith/deptevent/deptevents'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.deptevent.*'],
                        'order'       => 500,
                    ],
                    'deptup' => [
                        'label'       => 'Upcoming Events',
                        'url'         => Backend::url('nith/deptup/ups'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.deptup.*'],
                        'order'       => 500,
                    ],
                    'deptnotices' => [
                        'label'       => 'Notices',
                        'url'         => Backend::url('nith/deptnotices/dnotices'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.deptnotices.*'],
                        'order'       => 500,
                    ],
                    'deptmenu' => [
                        'label'       => 'Menu',
                        'url'         => Backend::url('nith/deptmenu/headers'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.deptmenu.*'],
                        'order'       => 500,
                    ],
                ],
            ]
        ];
    }

}
