<?php namespace NITH\Events\Models;

use Model;

/**
 * Event Model
 */
class Event extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nith_events_events';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];


    /**
     * Months
     */
    protected $months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

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

    /**
     * Custom attributes
     */

    public function getDay() {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $this->start_date)->format('d');
    }

    public function getMonth() {
        return $this->months[intval(\Carbon\Carbon::createFromFormat('Y-m-d', $this->start_date)->format('m')) - 1];
    }

    public function getStartDate() {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $this->start_date)->format('D, d M y');
    }
    public function getEndDate() {
        if ($this->end_date)
            return \Carbon\Carbon::createFromFormat('Y-m-d', $this->end_date)->format('D, d M y');
        else
            return null;
    }

}
