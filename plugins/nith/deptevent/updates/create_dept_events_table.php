<?php namespace NITH\DeptEvent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDeptEventsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_deptevent_dept_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('name');
            $table->string('at', 100);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('attended_by');
            $table->tinyInteger('type')->default(0);

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_deptevent_dept_events');
    }

}
