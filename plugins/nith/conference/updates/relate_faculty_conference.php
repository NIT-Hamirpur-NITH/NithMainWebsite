<?php namespace NITH\Research\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class RelateFacultyConferenceTable extends Migration
{

    public function up()
    {
        Schema::create('nith_conference_facutly_conf', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('faculty_id')->unsigned();
            $table->integer('conf_id')->unsigned();
            $table->primary(['faculty_id', 'conf_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_conference_facutly_conf');
    }

}
