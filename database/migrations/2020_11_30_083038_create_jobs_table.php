<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned()->index();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('requiredProfession')->nullable();
            $table->string('openings')->nullable();
            $table->string('placeOfWork')->nullable();
            $table->string('salary')->nullable();
            $table->string('workingHours')->nullable();
            $table->string('avaliableNow')->nullable();
            $table->longText('jobDescription')->nullable();
            $table->string('availabilityDate')->nullable();
            $table->string('shifts')->nullable();
            $table->string('accomodations')->nullable();
            $table->string('accomodationsPays')->nullable();
            $table->string('accomodationsCosts')->nullable();
            $table->string('corporateInsertion')->nullable();
            $table->string('contractDetails')->nullable();
            $table->string('fixedTerm')->nullable();
            $table->string('partTime')->nullable();
            $table->longText('additionalJobInformation')->nullable();
            $table->string('candidateQualification')->nullable();
            $table->string('candidateAge')->nullable();
            $table->string('candidateEducation')->nullable();
            $table->string('candidateWorkExperience')->nullable();
            $table->string('language')->nullable();
            $table->string('candidateOtherLanguage')->nullable();
            $table->string('candidateComputerSkills')->nullable();
            $table->string('candidateDrivingLicence')->nullable();
            $table->string('candidateMeansOfTransport')->nullable();
            $table->longText('descriptionOfStaffRequest')->nullable();
            $table->string('status')->default('open')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
