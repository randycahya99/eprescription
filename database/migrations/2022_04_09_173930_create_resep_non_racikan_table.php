<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepNonRacikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_non_racikan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_resep');
            $table->string('nama_resep');
            $table->unsignedBigInteger('obatalkes_id')->nullable();
            $table->unsignedBigInteger('signa_id')->nullable();
            $table->decimal('qty_obat', 8, 2)->nullable();
            $table->timestamps();
            $table->foreign('obatalkes_id')->references('id')->on('obatalkes')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('resep_non_racikan');
    }
}
