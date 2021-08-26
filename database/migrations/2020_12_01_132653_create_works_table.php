<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('candidate_id');
            $table->unsignedbigInteger('user_id')->nullable();
            $table->string('companyName')->nullable();
            $table->string('companyCountry')->nullable();
            $table->string('companyCity')->nullable();
            $table->string('position')->nullable();
            $table->longText('tasks')->nullable();
            $table->string('from')->nullable();
            $table->string('till')->nullable();
            $table->timestamps();
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
