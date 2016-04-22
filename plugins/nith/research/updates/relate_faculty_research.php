<?php namespace NITH\Research\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class RelateFacultyResearchTable extends Migration
{

    public function up()
    {
        Schema::create('nith_research_facutly_research', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('faculty_id')->unsigned();
            $table->integer('research_id')->unsigned();
            $table->primary(['faculty_id', 'research_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_research_facutly_research');
    }

}
