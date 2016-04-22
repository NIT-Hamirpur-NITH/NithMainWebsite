<?php namespace NITH\Labs\Models;

use Model;

/**
 * Equipment Model
 */
class Equipment extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_labs_equipment';

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
        'lab' => 'NITH\Labs\Models\Lab'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}