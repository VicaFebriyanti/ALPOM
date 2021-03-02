<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->datetime('tgl_pengaduan');
            $table->char('nik', 16);
            $table->text('isi_laporan');
            $table->string('foto', 255);
            $table->enum('status', ['0', 'proses', 'selesai'])->default('0');
            $table->timestamps();
            
            //relation
            $table->foreign('nik')->references('nik')->on('masyarakat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}
