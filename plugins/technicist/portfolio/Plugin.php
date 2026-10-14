<?php

namespace Technicist\Portfolio;

use Backend\Facades\Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * Portfolio Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'technicist.portfolio::lang.plugin.name',
            'description' => 'technicist.portfolio::lang.plugin.description',
            'author'      => 'Technicist',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */

    public function registerNavigation()
    {
        return [
            'portfolio' => [
                'label'       => 'Web Content',
                'url'         => \Backend::url('technicist/portfolio/projects'),
                'icon'        => 'icon-desktop',
                'permissions' => ['technicist.portfolio.*'],
                'order'       => 500,
                'sideMenu' => [
                    'projects' => [
                        'label'       => 'Projects',
                        'icon'        => 'icon-building',
                        'url'         => \Backend::url('technicist/portfolio/projects'),
                    ],
                    'services' => [
                        'label'       => 'Services',
                        'icon'        => 'icon-cogs',
                        'url'         => \Backend::url('technicist/portfolio/services'),
                    ],
                    'pages' => [
                        'label'       => 'Pages (Home, About, Contact)',
                        'icon'        => 'icon-file-text-o',
                        'url'         => \Backend::url('technicist/portfolio/pages'),
                    ]
                ]
            ]
        ];
    }


    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Site Content',
                'description' => 'Manage content for Home, About, and Contact pages.',
                'category'    => 'Technicist',
                'icon'        => 'icon-pencil',
                'class'       => 'Technicist\Portfolio\Models\Settings',
                'order'       => 500,
                'keywords'    => 'site about contact home'
            ]
        ];
    }

    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        return [
            \Technicist\Portfolio\Components\MyComponent::class => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'technicist.portfolio.some_permission' => [
                'tab' => 'technicist.portfolio::lang.plugin.name',
                'label' => 'technicist.portfolio::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }


}
