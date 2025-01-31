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
        Schema::create('blogs', function (Blueprint $table) {
            //id is important for a uniqe key(primarykey)
            $table->id();
            //in laravel varchar is called string not normal php wehere its called varhar
            $table->string('title');
            $table->text('description');
            $table->timestamps();
            //more data types
            //integer
            //char
            //biginteger
            //float
            //date
            //boolean
            //json

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
