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
        Schema::create('donacionstreamer', function (Blueprint $table) {
            $table->id();
            $table->string('usuario_streamer');
            $table->string('usuario_viewer');
            $table->integer('monto');
            $table->string('accion');
            $table->string('sonido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donacionstreamer');
    }
};
