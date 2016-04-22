<?php namespace NITH\DeptNotices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDNoticesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_deptnotices_d_notices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('content')->nullable();
            $table->text('link')->nullable();
            $table->boolean('archive')->default(false);
            $table->boolean('isnew')->default(true);

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_deptnotices_d_notices');
    }

}

