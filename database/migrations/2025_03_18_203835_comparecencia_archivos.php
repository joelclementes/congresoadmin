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
        Schema::create('comparecencia_archivos', function (Blueprint $table) {
            $table->id();
            $table->integer('comparecencia_id')->unsigned();
            $table->string('nombre', 100);
            $table->string('tipo',100);
            $table->timestamps();

            $table->foreign('comparecencia_id')->references('id')->on('comparecencias');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comparecencia_archivos');
    }
};
