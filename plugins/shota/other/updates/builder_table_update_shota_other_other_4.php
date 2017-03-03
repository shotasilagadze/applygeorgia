<?php namespace Shota\Other\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaOtherOther4 extends Migration
{
    public function up()
    {
        Schema::table('shota_other_other', function($table)
        {
            $table->text('admissions_below')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shota_other_other', function($table)
        {
            $table->dropColumn('admissions_below');
        });
    }
}
