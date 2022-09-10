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
        Schema::create('butirs', function (Blueprint $table) {
            $table->id();
            $table->string('but_id');
            $table->string('but_kegiatan');
            $table->string('but_slug')->unique();
            $table->string('but_excerpt');
            $table->string('but_key');
            $table->text('but_desc');
            $table->string('but_satuan');
            $table->float('but_kredit');
            $table->text('but_batasan');
            $table->text('but_fisik');
            $table->text('but_contoh');
            $table->foreignId('kategori02_id');
            $table->foreignId('jenjang_id');
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
        Schema::dropIfExists('butirs');
    }
};
