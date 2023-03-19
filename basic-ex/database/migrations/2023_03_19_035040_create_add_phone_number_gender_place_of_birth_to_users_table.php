<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddPhoneNumberGenderPlaceOfBirthToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_phone_number_gender_place_of_birth_to_users', function (Blueprint $table) {
            $table->interger('phone_number')->after('password')->default(0);
            $table->string('gender')->after('phone_number')->default(0);
            $table->string('place_of_birth')->after('gender')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_phone_number_gender_place_of_birth_to_users');
    }
}
