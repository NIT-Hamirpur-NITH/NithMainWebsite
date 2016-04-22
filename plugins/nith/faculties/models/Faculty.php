<?php namespace NITH\Faculties\Models;

use Model;

/**
 * Faculty Model
 */
class Faculty extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_faculties_faculties';

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
        'awards' => 'NITH\Awards\Models\Award',
        'menus' => 'NITH\Facmenus\Models\Facmenu',
        'projects' => 'NITH\Projects\Models\Project',
    ];
    public $belongsTo = [
        'department' => 'NITH\Departments\Models\Department',
        'profile' => 'NITH\Profiles\Models\Profile'
    ];
    public $belongsToMany = [
        'researches' => ['NITH\Research\Models\Research', 'table' => 'nith_research_facutly_research'],
        'conferences' => ['NITH\Conference\Models\Conference',  'table' => 'nith_conference_facutly_conf', 'otherKey' => 'conf_id']
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'resume' => 'System\Models\File'
    ];
    public $attachMany = [];

}
