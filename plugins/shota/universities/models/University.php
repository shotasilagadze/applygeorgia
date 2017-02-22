<?php namespace Shota\Universities\Models;

use Model;

/**
 * Model
 */
class University extends Model
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
        'programs',
    ];

public $belongsTo = [
    'Albums' => [
        'shota\academicmedia\models\AcademicMedia', 
        'key' => 'album_id',
        'otherKey' => 'id'        
        ]  
];


    public $attachMany = [ 'images' => ['System\Models\File', 'order' => 'sort_order'] ];

 public $belongsToMany = [
        

        'Schools' => [
            'shota\schools\models\School',
            'table'    => 'shota_schools_schooluniversity',
            'key' => 'university_id',
            'otherKey' => 'school_id'
        ]

    ];

   

    public $attachOne = [
        'image' => 'System\Models\File',
        'Logo' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shota_universities_universities';
}