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
        Schema::create('legal_representatives', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('dni', 20);
            $table->string('email', 30)->unique();
            $table->string('phone', 20);
            $table->string('address')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('foundation_id');
            $table->foreign('foundation_id')
                ->references('id')
                ->on('foundations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_representatives');
    }
};