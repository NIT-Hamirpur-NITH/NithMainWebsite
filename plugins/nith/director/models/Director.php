<?php namespace NITH\Director\Models;

use Model;

/**
 * Director Model
 */
class Director extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_director_directors';

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
        'profile' => 'NITH\Profiles\Models\Profile'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}