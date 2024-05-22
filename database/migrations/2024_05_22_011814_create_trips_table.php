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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->dateTime('pickup_date')->nullable();
            $table->string('passenger_name')->nullable();
            $table->string('pickup_location')->nullable();
            $table->string('no_of_passenger')->nullable();
            $table->string('dropoff_location')->nullable();
            $table->longText('description')->nullable();
            $table->string('ticket_copy')->nullable();
            $table->decimal('cost',10,2)->nullable();
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
        Schema::dropIfExists('trips');
    }
};
