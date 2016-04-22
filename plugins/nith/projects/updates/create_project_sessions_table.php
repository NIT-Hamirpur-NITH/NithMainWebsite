<?php namespace NITH\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProjectSessionsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_projects_project_sessions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->tinyInteger('program');
            $table->integer('year');
            $table->text('about');
            
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_projects_project_sessions');
    }

}
