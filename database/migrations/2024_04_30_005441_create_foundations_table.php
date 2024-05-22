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
        Schema::create('foundations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('logo');
            $table->string('nit', 20);
            $table->text('description');
            $table->string('email', 100)->unique();
            $table->string('phone', 20);
            $table->string('web_site');
            $table->text('mission');
            $table->text('vision')->nullable();
            $table->integer('ranking_score')->nullable();
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundations');
    }
};
