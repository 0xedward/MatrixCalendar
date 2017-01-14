<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrixTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrix_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('task_name');
            $table->string('category');
            $table->dateTime('due_date');
            $table->string('quadrant');
            $table->integer('list_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop table
        Schema::dropIfExists('matrix_tasks');
    }
}
