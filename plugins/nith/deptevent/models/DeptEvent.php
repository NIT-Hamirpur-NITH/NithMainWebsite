<?php namespace NITH\DeptEvent\Models;

use Model;

/**
 * DeptEvent Model
 */
class DeptEvent extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_deptevent_dept_events';

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
        'department' => 'NITH\Departments\Models\Department'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public static $types = [
        0 => 'Seminar',
        1 => 'Conference',
        2 => 'Summer/Winter School',
        3 => 'Workshop',
    ];

    /**
     * Custom methods
     */
    public function getTypeOptions($key = null) {
        return self::$types;
    }

}