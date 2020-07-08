<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBiginteger('user_id');
            $table->char('uuid');
            $table->string('agama');
            $table->string('nim');
            $table->string('ttl');
            $table->string('jk');
            $table->string('alamat');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('perguruan');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
