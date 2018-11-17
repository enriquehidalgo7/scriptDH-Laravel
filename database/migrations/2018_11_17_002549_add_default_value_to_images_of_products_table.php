<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultValueToImagesOfProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // no correr la migración hasta definir bien la ruta de la foto default !!!!!!!!!!

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('images')->default('storage/App/public/products/default.jpg')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
