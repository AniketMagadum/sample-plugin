<?php namespace Fytinnovations\JobManager;

use Backend;
use System\Classes\PluginBase;

/**
 * JobManager Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.User', 'RainLab.Location'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'JobManager',
            'description' => 'No description provided yet...',
            'author'      => 'Fytinnovations',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

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
            'Fytinnovations\JobManager\Components\MyComponent' => 'myComponent',
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
            'fytinnovations.jobmanager.some_permission' => [
                'tab' => 'JobManager',
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
            'jobmanager' => [
                'label'       => 'JobManager',
                'url'         => Backend::url('fytinnovations/jobmanager/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['fytinnovations.jobmanager.*'],
                'order'       => 500,
            ],
        ];
    }
}
