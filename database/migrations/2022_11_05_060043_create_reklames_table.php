<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReklamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reklames', function (Blueprint $table) {
            $table->id();
            $table->char('no_sk')->nullable();
            $table->char('status');

            $table->string('email');
            $table->char('nik')->nullable();
            $table->char('nama_pemohon')->nullable();
            $table->char('nomor_telepon')->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->char('npwpd')->nullable();
            $table->char('nama_perusahaan')->nullable();
            $table->char('jenis_usaha')->nullable();
            $table->text('alamat_usaha')->nullable();

            $table->char('jenis_reklame')->nullable();
            $table->text('bunyi_reklame')->nullable();
            $table->char('ukuran_reklame')->nullable();
            $table->text('tempat_pasang_reklame')->nullable();
            $table->char('tipe_reklame')->nullable();
            $table->text('jumlah_reklame')->nullable();
            $table->date('tanggal_mulai_pasang_reklame')->nullable();
            $table->date('tanggal_akhir_pasang_reklame')->nullable();
            $table->date('tanggal_masuk_ujb')->nullable();

            $table->integer('nominal_pajak')->nullable();
            $table->integer('nominal_ujb')->nullable();

            $table->binary('berkas_ktp', 5242880);
            $table->binary('berkas_formulir', 5242880);
            $table->binary('berkas_pajak', 5242880);
            $table->binary('berkas_jabong', 5242880);
            $table->binary('bertas_tempat_pemasangan', 5242880)->nullable();

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
        Schema::dropIfExists('reklames');
    }
}
