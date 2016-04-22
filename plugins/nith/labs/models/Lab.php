<?php namespace NITH\Labs\Models;

use Model;

/**
 * Lab Model
 */
class Lab extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_labs_labs';

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
        'equipments' => 'NITH\Labs\Models\Equipment',
    ];
    public $belongsTo = [
        'department' => 'NITH\Departments\Models\Department',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}