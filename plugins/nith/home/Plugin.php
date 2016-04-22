<?php namespace NITH\Home;

use Backend;
use System\Classes\PluginBase;

/**
 * Home Plugin Information File
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
            'name'        => 'Home',
            'description' => 'No description provided yet...',
            'author'      => 'NITH',
            'icon'        => 'icon-home'
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
            'NITH\Home\Components\MyComponent' => 'myComponent',
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
            'nith.home.some_permission' => [
                'tab' => 'Home',
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
            'home' => [
                'label'       => 'Home',
                'url'         => Backend::url('nith/events/events'),
                'icon'        => 'icon-home',
                'permissions' => ['ntih.events.*'],
                'order'       => 20,

                'sideMenu' => [
                    'events' => [
                        'label'       => 'Events',
                        'url'         => Backend::url('nith/events/events'),
                        'icon'        => 'icon-bars',
                        'permissions' => ['ntih.events.*'],
                        'order'       => 20,
                    ],
                    'news' => [
                        'label'       => 'News',
                        'url'         => Backend::url('nith/news/news'),
                        'icon'        => 'icon-bars',
                        'permissions' => ['nith.news.*'],
                        'order'       => 500,
                    ],
                    'notices' => [
                        'label'       => 'Notices',
                        'url'         => Backend::url('nith/notices/notices'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.notices.*'],
                        'order'       => 500,
                    ],
                    'activities' => [
                        'label'       => 'Activities',
                        'url'         => Backend::url('nith/activities/activities'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.activities.*'],
                        'order'       => 500,
                    ],
                    'links' => [
                        'label'       => 'Links',
                        'url'         => Backend::url('nith/links/links'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['nith.links.*'],
                        'order'       => 500,
                    ]
                ]
            ]
        ];
    }

}
