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
        Schema::create('tbalbum', function (Blueprint $table) {
            $table->id();
            $table->string('nombrealbum');



            $table->unsignedInteger('idartista');
            $table->foreign('idartista')->references('id')->on('tbartistas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbalbum');
    }
};
