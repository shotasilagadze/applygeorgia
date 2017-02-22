<?php namespace Shota\Universities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaUniversitiesUniversities2 extends Migration
{
    public function up()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->text('programs')->nullable();
            $table->dropColumn('programs_title');
            $table->dropColumn('program_description');
        });
    }
    
    public function down()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->dropColumn('programs');
            $table->text('programs_title')->nullable();
            $table->text('program_description')->nullable();
        });
    }
}
