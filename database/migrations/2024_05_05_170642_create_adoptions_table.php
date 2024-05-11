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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('observations');
            $table->date('adoption_date');
            $table->string('status', 100);
            $table->timestamps();

            $table->unsignedBigInteger('animal_id')->unique();
            $table->foreign('animal_id')
                ->references('id')
                ->on('animals')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('foundation_id')->nullable();
            $table->foreign('foundation_id')
                ->references('id')
                ->on('foundations')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('adoption_request_id')->unique();
            $table->foreign('adoption_request_id')
                ->references('id')
                ->on('adoption_requests')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
