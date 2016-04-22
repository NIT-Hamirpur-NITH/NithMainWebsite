<?php namespace NITH\Projects\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_projects_projects';

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
        'faculty' => 'NITH\Faculties\Models\Faculty',
        'project_session' => 'NITH\Projects\Models\ProjectSession',
    ];
    public $belongsToMany = [
        'students' => ['NITH\Students\Models\Student', 'table' => 'nith_projects_project_student', 'key' => 'project_id']
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'report' => 'System\Models\File'
    ];
    public $attachMany = [];

}