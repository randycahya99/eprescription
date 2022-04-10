<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signa', function (Blueprint $table) {
            $table->id();
            $table->string('signa_kode');
            $table->string('signa_nama');
            $table->string('additional_data');
            $table->date('created_date');
            $table->integer('modified_count');
            $table->date('last_modified_date');
            $table->integer('is_deleted');
            $table->integer('is_active');
            $table->date('deleted_date');
            $table->integer('deleted_by');
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
        Schema::dropIfExists('signa');
    }
}
