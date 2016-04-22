<?php namespace NITH\Facmenus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFacmenusTable extends Migration
{

    public function up()
    {
        Schema::create('nith_facmenus_facmenus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('link');
            $table->string('permalink', 20);
            $table->text('content');

            $table->integer('faculty_id')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('nith_faculties_faculties');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_facmenus_facmenus');
    }

}
