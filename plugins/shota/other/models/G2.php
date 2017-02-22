<?php namespace Shota\Other\Models;

use Model;

/**
 * Model
 */
class G2 extends Model
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

    protected $jsonable = [
        'facts','admissions',
    ];



    /**
     * @var string The database table used by the model.
     */


    public $table = 'shota_other_other';
}