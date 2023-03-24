<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_penulis')->default('Admin Bintang Juara');
            $table->string('judul');
            $table->text('slug');
            $table->text('body');
            $table->integer('kategori_berita_id');
            $table->string('gambar_berita');
            $table->boolean('is_active');
            $table->string('delete')->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
