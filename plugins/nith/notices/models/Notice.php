<?php namespace NITH\Notices\Models;

use Model;

/**
 * Notice Model
 */
class Notice extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_notices_notices';

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
