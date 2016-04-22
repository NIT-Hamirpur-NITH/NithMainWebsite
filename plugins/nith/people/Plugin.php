<?php namespace NITH\People;

use Backend;
use System\Classes\PluginBase;

/**
 * People Plugin Information File
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
            'name'        => 'People',
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
            'NITH\People\Components\MyComponent' => 'myComponent',
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
            'nith.people.some_permission' => [
                'tab' => 'People',
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
            'people' => [
                'label'       => 'People',
                'url'         => Backend::url('nith/profiles/profiles'),
                'icon'        => 'icon-user',
                'permissions' => ['nith.people.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'profiles' => [
                        'label'       => 'Profiles',
                        'url'         => Backend::url('nith/profiles/profiles'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.profiles.*'],
                        'order'       => 500,
                    ],
                    'departments' => [
                        'label'       => 'Departments',
                        'url'         => Backend::url('nith/departments/departments'),
                        'icon'        => 'icon-building',
                        'permissions' => ['nith.departments.*'],
                        'order'       => 500,
                    ],
                    'faculties' => [
                        'label'       => 'Faculties',
                        'url'         => Backend::url('nith/faculties/faculties'),
                        'icon'        => 'icon-user',
                        'permissions' => ['nith.faculties.*'],
                        'order'       => 500,
                    ],
                    'director' => [
                        'label'       => 'Director',
                        'url'         => Backend::url('nith/director/directors'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.director.*'],
                        'order'       => 500,
                    ],
                    'research' => [
                        'label'       => 'Research',
                        'url'         => Backend::url('nith/research/researches'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.research.*'],
                        'order'       => 500,
                    ],
                     'conference' => [
                        'label'       => 'Conference',
                        'url'         => Backend::url('nith/conference/conferences'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.conference.*'],
                        'order'       => 500,
                    ], 
                    'students' => [
                        'label'       => 'Students',
                        'url'         => Backend::url('nith/students/student'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.students.*'],
                        'order'       => 500,
                    ],
                    'staff' => [
                        'label'       => 'Staff',
                        'url'         => Backend::url('nith/staff/staffs'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.staff.*'],
                        'order'       => 500,
                    ],
                ]
            ],
        ];
    }

}
