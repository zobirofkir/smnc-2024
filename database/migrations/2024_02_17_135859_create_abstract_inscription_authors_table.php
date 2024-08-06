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
        Schema::create('abstract_inscription_authors', function (Blueprint $table) {
            $table->id();
            $table->boolean('presenter')->default(false);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('affiliation');
            $table->foreignIdFor(\App\Models\AbstractInscription::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstract_inscription_authors');
    }
};
