<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->integer('device_id');
            $table->double('data');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};