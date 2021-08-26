<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentProcessCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_process_comments', function (Blueprint $table) {
            $table->id();
            $table->longText("comment")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("recruitment_process_id")->nullable();
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
        Schema::dropIfExists('recruitment_process_comments');
    }
}
