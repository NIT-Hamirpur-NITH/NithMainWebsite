<?php namespace NITH\Students\Models;

use Model;

/**
 * Student Model
 */
class Student extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_students_students';

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

    public static $programs = [
        0 => 'Undergraduate',
        1 => 'Combined',
        2 => 'Graduate',
        3 => 'Phd',
    ];

    public static $years = [
        0 => 'I Year',
        1 => 'II Year',
        2 => 'III Year',
        3 => 'IV Year',
        4 => 'V Year',
    ];

    public function getProgramOptions($keyValue = null) {
        return self::$programs;
    }

    public function getYearOptions($keyValue = null) {
        return self::$years;
    }

}