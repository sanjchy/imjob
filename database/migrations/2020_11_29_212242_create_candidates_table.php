<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('firstName')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('lastName')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('birthday')->nullable();
            $table->string('citizenship')->nullable();
            $table->longText('message')->nullable();
            $table->string('drivingLicence')->nullable();
            $table->string('meansOfTransport')->nullable();
            $table->string('availableFrom')->nullable();
            $table->string('cv')->nullable();
            $table->string('terms')->nullable();
            $table->string('image')->nullable();
            $table->boolean('approved')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}