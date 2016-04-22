<?php namespace NITH\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class RelateProjectStudentTable extends Migration
{

    public function up()
    {
        Schema::create('nith_projects_project_student', function($table)
        {
            $table->engine = 'InnoDB';

            $table->integer('project_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->primary(['project_id', 'student_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_projects_project_student');
    }

}
