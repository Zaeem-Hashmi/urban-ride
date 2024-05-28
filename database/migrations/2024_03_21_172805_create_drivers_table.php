<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_available')->default(0);
            $table->string('address')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->string('image')->nullable();
            $table->string('passport')->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->string('visa')->nullable();
            $table->date('visa_issue_date')->nullable();
            $table->date('visa_expiry_date')->nullable();
            $table->string('ID_card')->nullable();
            $table->date('ID_issue_date')->nullable();
            $table->date('ID_expiry_date')->nullable();
            $table->string('rta')->nullable();
            $table->date('rta_issue_date')->nullable();
            $table->date('rta_expiry_date')->nullable();
            $table->string('driving_license')->nullable();
            $table->date('driving_license_issue_date')->nullable();
            $table->date('driving_license_expiry_date')->nullable();
            $table->string('beneficiary_name')->nullable();
            $table->string('IBAN')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('vehicle_type_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types')->onDelete('cascade');
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
        Schema::dropIfExists('drivers');
    }
};
