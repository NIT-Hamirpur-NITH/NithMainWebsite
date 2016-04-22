<?php namespace NITH\DeptStuAct\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDeptActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_deptstuact_dept_activities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title', 255);
            $table->text('description');
            $table->text('content')->nullable();
            $table->text('link')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('archive')->default(false);

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_deptstuact_dept_activities');
    }

}
