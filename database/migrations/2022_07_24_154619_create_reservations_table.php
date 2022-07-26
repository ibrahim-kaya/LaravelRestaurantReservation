<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id', 24)->comment('Benzersiz rezervasyon numarası');
            $table->string('name', 64)->comment('Rezervasyon yapan kişi adı');
            $table->string('email', 64)->comment('Rezervasyon yapan kişi E-Posta adresi');
            $table->string('phone', 24)->comment('Rezervasyon yapan kişi telefon numarası');
            $table->integer('person')->comment('Rezervasyon kişi sayısı');
            $table->date('date')->comment('Rezervasyon tarihi');
            $table->time('time')->comment('Rezervasyon saati');
            $table->string('table', 64)->nullable()->comment('Rezervasyon masası');
            $table->string('customer_note', 256)->nullable()->comment('Müşteri notu');
            $table->string('store_note', 256)->nullable()->comment('İşletme notu');
            $table->enum('status', ['-1', '0', '1'])->default('0')->comment('Rezervasyon durumu. -1: iptal, 0: bekliyor, 1: onaylandı')->nullable();
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
        Schema::dropIfExists('reservations');
    }
};
