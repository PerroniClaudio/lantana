<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('traffic_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('visitor_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('country')->nullable();
            $table->string('device_type')->nullable();
            $table->string('browser')->nullable();
            $table->string('page_visited')->nullable();
            $table->string('referrer')->nullable();
            $table->integer('session_duration')->nullable();
            $table->datetime('session_start')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('traffic_data');
    }
};
