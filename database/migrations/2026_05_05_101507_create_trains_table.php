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
        // creazione tabella iniziale
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('start_station');
            $table->string('arrival_station');
            $table->dateTime('start_time');
            $table->dateTime('arrival_time');
            $table->string('train_code');
            $table->integer('carriages_amount');
            $table->boolean('is_on_time');
            $table->boolean('is_canceled');
            $table->timestamps();
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
