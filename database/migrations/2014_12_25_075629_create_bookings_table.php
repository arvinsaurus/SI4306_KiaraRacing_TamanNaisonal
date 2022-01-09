<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->date('tanggal_tiket');
            $table->integer('tiket_dewasa');
            $table->integer('tiket_anak');
            $table->integer('total');
            $table->string('status');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
