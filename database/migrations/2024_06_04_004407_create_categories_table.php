<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * É preciso criar o model e os migrations. Lembrar de colocar no plural
     * php artisan make:model Category -m
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // $table->string('name', 100);//->index()->unique()->default('');

            //tem todo tipo de colunas e etc pra construir tabelas na documentação do laravel.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
