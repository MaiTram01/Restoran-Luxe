<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name', 50);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('unit', 50);
            $table->decimal('price', 10, 2);
            $table->string('avatar', 50)->default('default.png');
            $table->boolean('is_active')->default(true);
            $table->string('description', 255)->nullable();
            $table->string('description_detail', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
