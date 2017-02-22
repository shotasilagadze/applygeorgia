<?php namespace Shota\Universities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaUniversitiesUniversities4 extends Migration
{
    public function up()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->boolean('published')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('shota_universities_universities', function($table)
        {
            $table->dropColumn('published');
        });
    }
}
