<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploaduser', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama', 100);
            $table->String('jeniskelamin', 100);
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
        Schema::dropIfExists('uploaduser');
    }
}
