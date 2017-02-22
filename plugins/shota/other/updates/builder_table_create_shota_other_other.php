<?php namespace Shota\Other\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShotaOtherOther extends Migration
{
    public function up()
    {
        Schema::create('shota_other_other', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('facts')->nullable();
            $table->text('text_1')->nullable();
            $table->text('text_2')->nullable();
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shota_other_other');
    }
}
