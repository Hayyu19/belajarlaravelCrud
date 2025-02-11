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
        Schema::create('movie', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->String("title",100);
            $table->float('voteaverage');
            $table->String("overview");
            $table->String("posterpath");
            $table->integer("category_id");
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("category");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
