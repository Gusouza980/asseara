<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprovanteOrdemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprovante_ordems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("ordem_id");
            $table->string("caminho");
            $table->timestamps();
            $table->foreign('ordem_id')->references('id')->on('ordems')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprovante_ordems');
    }
}
