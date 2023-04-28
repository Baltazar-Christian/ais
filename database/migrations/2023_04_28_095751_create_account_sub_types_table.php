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
        Schema::create('account_sub_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->foreignId('account_id');
            $table->boolean('status')->default(0);
            $table->integer('account_code')->unique();
            $table->integer('min_code')->unique();
            $table->integer('max_code')->unique();
            $table->foreignId('created_by');
            $table->timestamps();

            // Relation Constraints
            $table->foreign('account_id')->references('id')->on('account_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_sub_types');
    }
};
