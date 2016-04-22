<?php namespace NITH\Sponsered\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSponseredProsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_sponsered_sponsered_pros', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->text('title');
            $table->string('duration', 100);
            $table->string('amount', 20);
            $table->text('funder');
            $table->text('status');
            $table->text('faculties');

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_sponsered_sponsered_pros');
    }

}
