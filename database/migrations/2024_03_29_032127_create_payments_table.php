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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\ConferenceInscription::class);
            $table->integer('total');
            $table->string('payed_by');
            $table->boolean('verified')->default(false);
            $table->text('info');
            $table->string('bank_transfer')->nullable();
            $table->string('status')->default('pending'); // Adjust type and default as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
