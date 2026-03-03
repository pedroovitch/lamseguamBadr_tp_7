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
        Schema::disableForeignKeyConstraints();

        Schema::create('participations', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('films_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('acteurs_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('role');
        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
