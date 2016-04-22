<?php namespace NITH\Awards\Models;

use Model;

/**
 * Award Model
 */
class Award extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_awards_awards';

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
        'faculty' => 'NITH\Faculties\Models\Faculty'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}