<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papels', function (Blueprint $table) {
          $table->id(); 
          $table->string('nome');
          $table->string('descricao')->nullable();
          $table->timestamps();
        });

      
        Schema::create('papel_user', function (Blueprint $table) {
            $table->unsignedBigInteger('papel_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('papel_id')->references('id')->on('papels')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->primary(['papel_id','user_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papel_user');
       
        Schema::dropIfExists('papeis');
    }
}
