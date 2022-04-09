<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepRacikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_racikan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_resep');
            $table->string('nama_resep');
            $table->unsignedBigInteger('obatalkes_id_1')->nullable();
            $table->unsignedBigInteger('obatalkes_id_2')->nullable();
            $table->unsignedBigInteger('obatalkes_id_3')->nullable();
            $table->unsignedBigInteger('signa_id')->nullable();
            $table->decimal('qty_obat_1', 8, 2);
            $table->decimal('qty_obat_2', 8, 2);
            $table->decimal('qty_obat_3', 8, 2);
            $table->timestamps();
            $table->foreign('obatalkes_id_1')->references('id')->on('obatalkes')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('obatalkes_id_2')->references('id')->on('obatalkes')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('obatalkes_id_3')->references('id')->on('obatalkes')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('signa_id')->references('id')->on('signa')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_racikan');
    }
}
