<?php namespace Shota\Schools\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShotaSchoolsSchoold extends Migration
{
    public function up()
    {
        Schema::create('shota_schools_schoold', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shota_schools_schoold');
    }
}
