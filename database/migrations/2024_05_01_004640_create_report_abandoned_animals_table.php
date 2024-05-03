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
        Schema::create('report_abandoned_animals', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->string('image');
            $table->string('status', 100);
            $table->string('abandonment_place');
            $table->string('abandonment_status', 100);
            $table->dateTime('abandonment_date')->nullable();
            $table->dateTime('report_date');
            $table->integer('alert')->default(1);
            $table->dateTime('rescue_date')->nullable();
            $table->text('rescue_observations')->nullable();
            $table->time('response_time')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('foundation_id')->nullable();
            $table->foreign('foundation_id')
                ->references('id')
                ->on('foundations')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_abandoned_animals');
    }
};
