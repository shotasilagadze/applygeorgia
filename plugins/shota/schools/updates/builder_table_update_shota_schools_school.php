<?php namespace Shota\Schools\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShotaSchoolsSchool extends Migration
{
    public function up()
    {
        Schema::rename('shota_schools_schoold', 'shota_schools_school');
    }
    
    public function down()
    {
        Schema::rename('shota_schools_school', 'shota_schools_schoold');
    }
}
