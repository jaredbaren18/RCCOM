<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_fname');
            $table->string('user_profile');
            $table->string('user_mname');
            $table->string('user_lname');
            $table->integer('user_age');
            $table->date('user_birthday');
            $table->string('user_gender');
            $table->string('barangay');
            $table->string('municipal');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_account_status');
            $table->string('type');
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_users');
    }
};
