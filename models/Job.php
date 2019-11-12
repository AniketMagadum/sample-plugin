<?php namespace Fytinnovations\JobManager\Models;

use Model;

/**
 * Job Model
 */
class Job extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /*
     * Validation
     */
    public $rules = [
        'title'   => 'required',
        'job_description'    => ['required'],
        'job_type'    => ['required'],
        'how_to_apply'    => ['required'],
        'application_target'    => ['required'],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fytinnovations_jobmanager_jobs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'job_type'=>"Fytinnovations\JobManager\Models\JobType"
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
