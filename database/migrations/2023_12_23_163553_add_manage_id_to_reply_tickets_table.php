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
        Schema::table('reply_tickets', function (Blueprint $table) {
            $table->foreignId('manager_id')->nullable()->constrained('callcenters')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reply_tickets', function (Blueprint $table) {
            $table->dropForeign('manager_id');
        });
    }
};