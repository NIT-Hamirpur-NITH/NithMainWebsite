<?php namespace NITH\DeptNotices\Models;

use Model;

/**
 * DNotice Model
 */
class DNotice extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_deptnotices_d_notices';

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
    public $attachOne = [
        'doc' => 'System\Models\File'
    ];
    public $attachMany = [];

}