<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('status')->nullable()->default(NULL);
            $table->boolean('verified')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('candidate_id')->references('id')->on('candidates')->cascadeOnDelete();
            $table->foreign('job_id')->references('id')->on('jobs')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitments');
    }
}
