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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('image');
            $table->text('description');
            $table->integer('age')->nullable();
            $table->string('coat_color', 100)->nullable();
            $table->string('especie', 100);
            $table->string('race', 100)->nullable();
            $table->float('weight')->nullable();
            $table->string('status', 50);
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->timestamps();

            $table->unsignedBigInteger('foundation_id')->nullable();
            $table->foreign('foundation_id')
                ->references('id')
                ->on('foundations')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
