<?php namespace NITH\Staff\Models;

use Model;

/**
 * Staff Model
 */
class Staff extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_staff_staff';

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
        'department' => 'NITH\Departments\Models\Department',
        'profile' => 'NITH\Profiles\Models\Profile'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'resume' => 'System\Models\File'
    ];
    public $attachMany = [];

}