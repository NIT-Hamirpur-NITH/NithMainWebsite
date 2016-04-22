<?php namespace NITH\News\Models;

use Model;

/**
 * NewsItem Model
 */
class NewsItem extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_news_news_items';

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
    public $attachOne = [
        'doc' => 'System\Models\File'
    ];
    public $attachMany = [];

}
