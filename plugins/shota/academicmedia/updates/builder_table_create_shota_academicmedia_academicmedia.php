<?php namespace Shota\Academicmedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShotaAcademicmediaAcademicmedia extends Migration
{
    public function up()
    {
        Schema::create('shota_academicmedia_academicmedia', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('videos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shota_academicmedia_academicmedia');
    }
}
