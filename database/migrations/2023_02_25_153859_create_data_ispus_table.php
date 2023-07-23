<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIspusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ispus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('pm10');
            $table->integer('so2');
            $table->integer('co');
            $table->integer('o3');
            $table->integer('no2');
            $table->integer('max');
            $table->string('critical');
            $table->string('categori');
            $table->string('lokasi');
            $table->string('status_data');
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
        Schema::dropIfExists('data_ispus');
    }
}
