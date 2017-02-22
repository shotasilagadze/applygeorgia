<?php namespace Shota\Academicmedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaAcademicmediaAcademicmedia2 extends Migration
{
    public function up()
    {
        Schema::table('shota_academicmedia_academicmedia', function($table)
        {
            $table->integer('university_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shota_academicmedia_academicmedia', function($table)
        {
            $table->dropColumn('university_id');
        });
    }
}
