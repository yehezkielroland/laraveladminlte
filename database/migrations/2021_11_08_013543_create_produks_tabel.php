<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('produk');
            $table->integer('jumlah');
            $table->integer('harga');
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
        Schema::dropIfExists('produks_tabel');
    }
}
