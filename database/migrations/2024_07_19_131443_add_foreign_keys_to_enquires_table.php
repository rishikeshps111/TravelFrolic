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
        Schema::table('enquires', function (Blueprint $table) {
            $table->foreign(['package_id'], '[enquires|package_id][packages|id]')->references(['id'])->on('packages')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enquires', function (Blueprint $table) {
            $table->dropForeign('[enquires|package_id][packages|id]');
        });
    }
};
