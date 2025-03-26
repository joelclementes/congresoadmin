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
        Schema::create('procedimientos_adquisiciones_archivos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->unique();
            $table->bigInteger('procedimiento_id')->unsigned();
            $table->bigInteger('proceso_id')->unsigned();
            $table->timestamps();

            $table->foreign('procedimiento_id')->references('id')->on('procedimientos_adquisiciones');
            $table->foreign('proceso_id')->references('id')->on('procedimientos_adquisiciones_procesos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedimientos_adquisiciones_archivos');
    }
};
