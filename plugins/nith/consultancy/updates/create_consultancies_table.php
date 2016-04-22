<?php namespace NITH\Consultancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateConsultanciesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_consultancy_consultancies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('name');
            $table->string('duration', 255);
            $table->string('amount', 255);
            $table->string('source', 255);
            $table->tinyInteger('status')->default(0);
            $table->text('faculties');

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_consultancy_consultancies');
    }

}
