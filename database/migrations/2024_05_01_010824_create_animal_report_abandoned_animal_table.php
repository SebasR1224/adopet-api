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
        Schema::create('animal_report_abandoned_animal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id')->unique();
            $table->unsignedBigInteger('report_abandoned_animal_id')->unique();
            $table->timestamps();

            $table->foreign('animal_id')
                ->references('id')->on('animals')
                ->onUpdate('cascade');

            $table->foreign('report_abandoned_animal_id', 'animal_report_abandoned_foreign')
                ->references('id')->on('report_abandoned_animals')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_report_abandoned_animal');
    }
};
