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
        Schema::table('report_abandoned_animals', function (Blueprint $table) {
            $table->unsignedBigInteger('reporting_user_id');
            $table->foreign('reporting_user_id')
                ->references('id')
                ->on('reporting_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('report_abandoned_animals', function (Blueprint $table) {
            //
        });
    }
};
