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
        Schema::create('account_process_mappings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_id');
            $table->foreignId('account_id');
            $table->string('transaction_side');
            $table->timestamps();

            // Relation Constraints
            $table->foreign('process_id')->references('id')->on('account_processes')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_process_mappings');
    }
};
