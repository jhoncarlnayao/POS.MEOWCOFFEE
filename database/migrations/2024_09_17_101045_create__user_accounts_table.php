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
        Schema::create('_user_accounts', function (Blueprint $table) {
        $table->id();
        $table->string('Email')->unique(); 
        $table->string('Username')->unique(); 
        $table->string('Password'); 
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_user_accounts');
    }
};
