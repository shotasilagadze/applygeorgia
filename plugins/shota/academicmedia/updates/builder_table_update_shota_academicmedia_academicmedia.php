<?php namespace Shota\Academicmedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaAcademicmediaAcademicmedia extends Migration
{
    public function up()
    {
        Schema::table('shota_academicmedia_academicmedia', function($table)
        {
            $table->string('album')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shota_academicmedia_academicmedia', function($table)
        {
            $table->dropColumn('album');
        });
    }
}
