<?php namespace NITH\Links\Models;

use Model;

/**
 * Link Model
 */
class Link extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_links_links';

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
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}