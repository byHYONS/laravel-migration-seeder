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
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('time_of_departure', 'departure_date');
            $table->renameColumn('arrival_time', 'arrival_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('departure_date', 'time_of_departure');
            $table->renameColumn('arrival_date', 'arrival_time');
        });
    }
};
	 	