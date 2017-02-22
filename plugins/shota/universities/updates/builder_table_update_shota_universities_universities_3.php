<?php namespace Shota\Universities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaUniversitiesUniversities3 extends Migration
{
    public function up()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->text('aboutus_mini')->nullable();
            $table->text('aboutus_big')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->dropColumn('aboutus_mini');
            $table->dropColumn('aboutus_big');
        });
    }
}
