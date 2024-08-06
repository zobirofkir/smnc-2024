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
        Schema::create('abstract_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('chu');
            $table->string('faculty');
            $table->string('university');
            $table->string('type');
            $table->text('title');
            $table->text('introduction');
            $table->text('observation')->nullable();
            $table->text('discussion');
            $table->text('conclusion');
            $table->text('materiel_and_methods')->nullable();
            $table->text('results')->nullable();
            $table->boolean('accepted')->nullable();

            $table->foreignIdFor(\App\Models\ConferenceInscription::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstract_inscriptions');
    }
};
