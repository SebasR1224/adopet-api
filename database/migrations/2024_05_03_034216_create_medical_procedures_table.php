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
        Schema::create('medical_procedures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type', 100);
            $table->text('description');
            $table->text('observations')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')
                ->references('id')
                ->on('animals')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_procedures');
    }
};
