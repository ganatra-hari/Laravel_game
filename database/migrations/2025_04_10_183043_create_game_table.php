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
        Schema::create('game', function (Blueprint $table) {
            $table->id('id');
            $table->string('image');
            $table->string('name',30);
            $table->string('description');
            $table->float('price',30);
            $table->integer('quantity');
            $table->string('category');
            $table->string('type');
            $table->string('info_link',100);
            
            // $table->string('info_link',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};
