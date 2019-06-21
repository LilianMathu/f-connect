<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produces', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('farmer_id');
            $table->integer('quantity');
            $table->integer('cost');
            $table->timestamps();
            $table->integer('farmer_id')->unsigned();
            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produces');
    }
}
