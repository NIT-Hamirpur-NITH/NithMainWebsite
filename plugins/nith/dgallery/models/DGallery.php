<?php namespace NITH\DGallery\Models;

use Model;

/**
 * DGallery Model
 */
class DGallery extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_dgallery_d_galleries';

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
        'carousel' => 'Mohsin\Carousel\Models\Carousel',
        'department' => 'NITH\Departments\Models\Department',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}