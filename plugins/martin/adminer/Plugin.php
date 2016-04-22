<?php

    namespace Martin\Adminer;

    use Backend;
    use System\Classes\PluginBase;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'martin.adminer::lang.plugin.name',
                'description' => 'martin.adminer::lang.plugin.description',
                'author'      => 'Martin M.',
                'icon'        => 'icon-database'
            ];
        }

        public function registerNavigation() {
            return [
                'adminer' => [
                    'label'       => 'martin.adminer::lang.navigation.label',
                    'url'         => Backend::url('martin/adminer/octoberadminer'),
                    'permissions' => ['martin.adminer.access_adminer'],
                    'icon'        => 'icon-database',
                    'order'       => 900
                ]
            ];
        }

        public function registerPermissions() {
            return [
                'martin.adminer.access_adminer' => ['tab' => 'martin.adminer::lang.permissions.tab', 'label' => 'martin.adminer::lang.permissions.label'],
            ];
        }

    }

?>