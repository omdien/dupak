<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori02s', function (Blueprint $table) {
            $table->id();
            $table->string('kat02_id');
            $table->foreignId('kategori01_id');
            $table->string('kat02_kategori')->unique();
            $table->string('kat02_slug')->unique();
            $table->timestamp('kat02_publish_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori02s');
    }
};
