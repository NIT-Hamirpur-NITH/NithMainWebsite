<?php namespace NITH\Projects\Models;

use Model;

/**
 * ProjectSession Model
 */
class ProjectSession extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_projects_project_sessions';

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
    public $hasMany = [
        'projects' => 'NITH\Projects\Models\Project'
    ];
    public $belongsTo = [
        'department' => 'NITH\Departments\Models\Department'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}