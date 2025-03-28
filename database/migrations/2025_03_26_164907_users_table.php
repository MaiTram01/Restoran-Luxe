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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->string('full_name', 100)->nullable();
            $table->string('avatar', 50)->default('default.png');
            $table->date('birth_day')->nullable(); 
            $table->string('phone_number', 10)->nullable();
            $table->string('email', 50)->nullable();
            $table->enum('role', ['admin','customer'])->default('customer');
            $table->dateTime('last_login')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
