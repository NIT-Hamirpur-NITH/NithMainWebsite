<?php namespace NITH\Departments\Models;

use Model;

/**
 * Department Model
 */
class Department extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_departments_departments';

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
    public $hasOne = [
        'hod' => 'NITH\Hods\Models\Hod',
        'dept_detail' => 'NITH\DeptDetails\Models\DeptDetail',
    ];
    public $hasMany = [
        'faculties' => 'NITH\Faculties\Models\Faculty',
        'staffs' => 'NITH\Staff\Models\Staff',
        'students' => 'NITH\Students\Models\Student',
        'labs' => 'NITH\Labs\Models\Lab',
        'consultancies' => 'NITH\Consultancy\Models\Consultancy',
        'project_sessions' => 'NITH\Projects\Models\ProjectSession',
        'sponsered_pros' => 'NITH\Sponsered\Models\SponseredPro',
        'activities' => 'NITH\DeptStuAct\Models\DeptActivity',
        'events' => 'NITH\DeptEvent\Models\DeptEvent',
        'ups' => 'NITH\DeptUp\Models\Up',
        'notices' => 'NITH\DeptNotices\Models\DNotice',
        'galleries' => 'NITH\DGallery\Models\DGallery',
        'menus' => 'NITH\DeptMenu\Models\Header',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

    public $hasManyThrough = [
        'projects' => [
            'NITH\Projects\Models\Project',
            'through' => 'NITH\Projects\Models\ProjectSession'
        ],
        'menu_items' => [
            'NITH\DeptMenu\Models\Item',
            'through' => 'NITH\DeptMenu\Models\Header'
        ]
    ];

}
