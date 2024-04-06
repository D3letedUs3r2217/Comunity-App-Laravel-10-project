<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up(): void
    {
        $code = DB::table('comunities')->latest()->value('code');
        $name = DB::table('comunities')->latest()->value('nome');
        $tablename = $name . 'chat' . $code;

        Schema::create($tablename, function(Blueprint $table){

            $table->id();
            $table->string('content', 100);
            $table->string('sendby');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        $code = DB::table('comunities')->latest()->value('code');
        $name = DB::table('comunities')->latest()->value('nome');
        $tablename = $name . 'chat' . $code;
        Schema::dropIfExists($tablename);
    }
};
