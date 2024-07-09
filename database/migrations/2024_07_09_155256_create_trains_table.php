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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 30); 
            $table->string('departure_station', 50); 
            $table->string('arrival_station', 50); 
            $table->date('time_of_departure'); 
            $table->date('arrival_time');
            $table->smallInteger('train_code');
            $table->tinyInteger('coach_number'); 
            $table->tinyInteger('on_schedule'); 
            $table->tinyInteger('cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
