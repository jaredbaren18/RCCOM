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
        Schema::create('table_employees', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('emp_id_no');
            $table->string('emp_fname');
            $table->string('emp_mname');
            $table->string('emp_lname');
            $table->integer('emp_age');
            $table->date('emp_birthday');
            $table->string('emp_gender');
            $table->string('emp_barangay');
            $table->string('emp_municipal');
            $table->string('emp_zipcode');
            $table->string('emp_contact_no');
            $table->string('emp_email');
            $table->string('emp_position');
            $table->string('emp_role');
            $table->string('emp_department');
            $table->string('emp_password');
            $table->rememberToken();
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_employees');
    }
};

