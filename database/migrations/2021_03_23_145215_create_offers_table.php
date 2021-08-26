<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("job_id");
            $table->longText("warning")->nullable();
            $table->string("position")->nullable();
            $table->longText("description")->nullable();
            $table->longText("lookingFor")->nullable();
            $table->longText("weOffer")->nullable();
            $table->longText("note")->nullable();
            $table->boolean("status")->nullable();
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
        Schema::dropIfExists('offers');
    }
}
