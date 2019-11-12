<?php namespace Fytinnovations\JobManager\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Job Types Back-end Controller
 */
class JobTypes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Fytinnovations.JobManager', 'jobmanager', 'jobtypes');
    }
}
