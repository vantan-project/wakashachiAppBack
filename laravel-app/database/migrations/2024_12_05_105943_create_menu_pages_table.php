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
        Schema::create('menu_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("menu_id");
            $table->unsignedInteger("count");
            $table->unsignedInteger("raw");
            $table->unsignedInteger("column");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_pages');
    }
};