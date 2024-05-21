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
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('model')->nullable();
            $table->year('year');
            $table->string('Chassis_number')->nullable();
            $table->string('image')->nullable();
            $table->string('insurance_number')->nullable();
            $table->string('insurance_company')->nullable();
            $table->date('insurance_issue_date');
            $table->date('insurance_expiry_date');
            $table->date('registration_issue_date');
            $table->date('registration_expiry_date');
            $table->string('rta_permit')->nullable();
            $table->date('rta_issue_date')->nullable();
            $table->date('rta_expiry_date')->nullable();
            $table->boolean('is_active')->default(0);
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
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
        Schema::dropIfExists('vehicle_types');
    }
};
