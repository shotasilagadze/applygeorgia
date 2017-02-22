<?php namespace Shota\Other\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaOtherOther extends Migration
{
    public function up()
    {
        Schema::table('shota_other_other', function($table)
        {
            $table->text('aboutus')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shota_other_other', function($table)
        {
            $table->dropColumn('aboutus');
        });
    }
}
