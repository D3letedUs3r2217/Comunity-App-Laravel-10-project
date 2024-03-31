<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {


        Schema::create('Comunitiydata', function(Blueprint $table){
            $default_code = DB::table('comunities')->latest()->value('code');
            $default_name = DB::table('comunities')->latest()->value('nome');


            $table->integer('code')->default($default_code);
            $table->string('name')->default($default_name);
            $table->string('members');
            $table->string('adminname');
            $table->integer('membersNum');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Comunitiydata');
    }
};
