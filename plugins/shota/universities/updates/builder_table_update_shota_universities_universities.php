<?php namespace Shota\Universities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaUniversitiesUniversities extends Migration
{
    public function up()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->text('program_description')->nullable();
            $table->renameColumn('programs', 'programs_title');
        });
    }
    
    public function down()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->dropColumn('program_description');
            $table->renameColumn('programs_title', 'programs');
        });
    }
}
