<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("engenheiro_id");
            $table->string("numero")->nullable();
            $table->string("proprietario")->nullable();
            $table->string("caminho");
            $table->tinyInteger("aprovado")->default(0);
            $table->timestamps();
            $table->foreign('engenheiro_id')->references('id')->on('engenheiros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordems');
    }
}
