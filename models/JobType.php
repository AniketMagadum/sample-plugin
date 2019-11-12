<?php namespace Fytinnovations\JobManager\Models;

use Model;

/**
 * JobType Model
 */
class JobType extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\NestedTree;
    /*
     * Validation
     */
    public $rules = [
        'name'   => 'required',
        'slug'    => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:fytinnovations_jobmanager_job_types'],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fytinnovations_jobmanager_job_types';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
