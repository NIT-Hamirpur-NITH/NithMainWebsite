<?php namespace NITH\DeptDetails\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDeptDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_deptdetails_dept_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('about');
            $table->string('email', 255);
            $table->text('phone');
            $table->text('address');

            $table->text('programs');
            $table->text('courses');
            $table->text('current_session');

            // Refrences department
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_deptdetails_dept_details');
    }

}
