<?php namespace Shota\Universities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShotaUniversitiesUniversities extends Migration
{
    public function up()
    {
        Schema::create('shota_universities_universities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('album_id')->nullable();
            $table->string('web')->nullable();
            $table->text('programs')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shota_universities_universities');
    }
}
