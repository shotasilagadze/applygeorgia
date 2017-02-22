<?php namespace Shota\Schools\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShotaSchoolsSchooluniversity extends Migration
{
    public function up()
    {
        Schema::create('shota_schools_schooluniversity', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('school_id')->unsigned();
            $table->integer('university_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shota_schools_schooluniversity');
    }
}
