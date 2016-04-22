<?php namespace NITH\Conference\Models;

use Model;

/**
 * Conference Model
 */
class Conference extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_conference_conferences';

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
        'faculties' => ['NITH\Faculties\Models\Faculty', 'table' => 'nith_conference_facutly_conf', 'key' => 'conf_id']
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}