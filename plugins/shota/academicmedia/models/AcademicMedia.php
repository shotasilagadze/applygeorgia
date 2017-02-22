<?php namespace Shota\Academicmedia\Models;

use Model;

/**
 * Model
 */
class AcademicMedia extends Model
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
        'videos',
    ];


    public $hasOne = [
        'University' => [
        'shota\universities\models\University', 
        'key' => 'university_id',
        'otherKey' => 'id'        
        ]        
        
    ];



    public $attachMany = [ 'images' => ['System\Models\File', 'order' => 'sort_order'] ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shota_academicmedia_academicmedia';
}