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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();            
            $table->string('trainer_id')->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('specialty');
            $table->integer('experience');
            $table->string('contact');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }
        
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
