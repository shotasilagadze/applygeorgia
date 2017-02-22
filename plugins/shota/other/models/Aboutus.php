<?php namespace Shota\Other\Models;

use Model;

/**
 * Model
 */
class Aboutus extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
        
    ];

    public $attachMany = [ 'images' => ['System\Models\File', 'order' => 'sort_order'] ];

     protected $jsonable = [
        'facts','admissions',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'shota_other_other';
}