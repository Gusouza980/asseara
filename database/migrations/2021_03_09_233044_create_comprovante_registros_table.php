<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprovanteRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprovante_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("engenheiro_id");
            $table->string("caminho");
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
        Schema::dropIfExists('comprovante_registros');
    }
}
