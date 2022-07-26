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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->comment('Menüdeki ürün adı');
            $table->string('description', 128)->comment('Menüdeki ürün açıklaması');
            $table->string('price', 128)->comment('Menüdeki ürün fiyatı');
            $table->enum('category', ['yemek', 'icecek', 'anayemek', 'tatli'])->comment('Menüdeki ürün kategorisi');
            $table->integer('order')->default('0')->comment('Ürün sırası');
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
        Schema::dropIfExists('menu_items');
    }
};
