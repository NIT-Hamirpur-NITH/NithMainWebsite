<?php namespace NITH\DeptDetails\Models;

use Model;

/**
 * DeptDetail Model
 */
class DeptDetail extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_deptdetails_dept_details';

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

}