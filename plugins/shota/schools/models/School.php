<?php namespace Shota\Schools\Models;

use Model;

/**
 * Model
 */
class School extends Model
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



 public $belongsToMany = [
        

        'Universities' => [
            'shota\universities\models\University',
            'table'    => 'shota_schools_schooluniversity',
            'key' => 'school_id',
            'otherKey' => 'university_id'
        ]

    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shota_schools_school';
}