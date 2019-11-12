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
            'name'        => 'fytinnovations.jobmanager::lang.plugin.name',
            'description' => 'fytinnovations.jobmanager::lang.plugin.description',
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
        return [
            'fytinnovations.jobmanager.manage_job_types' => [
                'tab' => 'fytinnovations.jobmanager::lang.plugin.tab',
                'label' => 'fytinnovations.jobmanager::lang.plugin.manage_job_types'
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
            'jobmanager' => [
                'label'       => 'fytinnovations.jobmanager::lang.plugin.name',
                'url'         => Backend::url('fytinnovations/jobmanager/jobtypes'),
                'icon'        => 'icon-briefcase',
                'permissions' => ['fytinnovations.jobmanager.manage_job_types'],
                'order'       => 500,
                'sideMenu' => [
                    'job_types' => [
                        'label'       => 'fytinnovations.jobmanager::lang.job_types.menu_label',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('fytinnovations/jobmanager/jobtypes'),
                        'permissions' => ['fytinnovations.jobmanager.manage_job_types']
                    ]
                ]
            ],
        ];
    }
}
