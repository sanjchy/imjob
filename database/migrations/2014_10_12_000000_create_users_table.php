<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->boolean('verified')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        // Insert some stuff
        DB::table('users')->insert(
            [
                "name" => "Aleksandar Andric",
                'email' => 'aaleksandar993@gmail.com',
                'password' => bcrypt("radnaskela123"),
                'role' => "SuperAdmin",
                'verified' => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        );
        DB::table("users")->insert(
            [
                "name" => "Predrag Novakovic",
                'email' => 'predrag.novakovic@imjob.rs',
                'password' => bcrypt("123456"),
                'role' => "SuperAdmin",
                'verified' => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
