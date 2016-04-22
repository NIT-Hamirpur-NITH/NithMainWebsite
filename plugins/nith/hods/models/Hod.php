<?php namespace NITH\Hods\Models;

use Model;

/**
 * Hod Model
 */
class Hod extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_hods_hods';

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
        'department' => 'NITH\Departments\Models\Department'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}