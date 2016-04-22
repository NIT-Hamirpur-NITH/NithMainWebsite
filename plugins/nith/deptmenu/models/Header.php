<?php namespace NITH\DeptMenu\Models;

use Model;

/**
 * Header Model
 */
class Header extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_deptmenu_headers';

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
    public $hasMany = [
        'items' => 'NITH\DeptMenu\Models\Item',
    ];
    public $belongsTo = [
        'department' => 'NITH\Departments\Models\Department',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'doc' => 'System\Models\File'
    ];
    public $attachMany = [];

}