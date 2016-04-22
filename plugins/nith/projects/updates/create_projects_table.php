<?php namespace NITH\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_projects_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title');

            $table->integer('faculty_id')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('nith_faculties_faculties');

            $table->integer('project_session_id')->unsigned();
            $table->foreign('project_session_id')->references('id')->on('nith_projects_project_sessions');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_projects_projects');
    }

}
