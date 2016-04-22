<?php namespace NITH\Research\Models;

use Model;

/**
 * Research Model
 */
class Research extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_research_researches';

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
    public $belongsTo = [];
    public $belongsToMany = [
        'faculties' => ['NITH\Faculties\Models\Faculty', 'table' => 'nith_research_facutly_research']
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}