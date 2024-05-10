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
        Schema::table('medical_procedures', function (Blueprint $table) {
            $table->unsignedBigInteger('type')->nullable()->change();

                $table->foreign('type')
                ->references('id')
                ->on('medical_procedure_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_procedures', function (Blueprint $table) {
            //
        });
    }
};
