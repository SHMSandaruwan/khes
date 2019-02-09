<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_students', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('classroom')->nullable(false);
            $table->string('teachersname')->nullable(false);
            $table->string('studentfirstname')->nullable(false);
            $table->string('studentlastname')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->string('joinedyear')->nullable(false);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assign_students');
    }
}
