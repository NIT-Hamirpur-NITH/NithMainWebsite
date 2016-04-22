<?php namespace NITH\Consultancy\Models;

use Model;

/**
 * Consultancy Model
 */
class Consultancy extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_consultancy_consultancies';

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
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}