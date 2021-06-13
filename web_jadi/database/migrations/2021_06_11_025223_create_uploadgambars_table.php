<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadgambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadgambar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama', 100);
            $table->String('jabatan', 100);
            $table->String('alamat', 100);
            $table->String('upload_foto', 100);
            $table->String('upload_ktp', 100);
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
        Schema::dropIfExists('uploadgambars');
    }
}
