<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('messages', function(Blueprint $table){
            $table->id();
            $table->string('content', 100);
            $table->string('sendby');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};
