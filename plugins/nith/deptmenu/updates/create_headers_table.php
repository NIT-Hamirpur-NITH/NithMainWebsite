<?php namespace NITH\DeptMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateHeadersTable extends Migration
{

    public function up()
    {
        Schema::create('nith_deptmenu_headers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title', 25);
            $table->text('link')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('isheader')->default(1);

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_deptmenu_headers');
    }

}
