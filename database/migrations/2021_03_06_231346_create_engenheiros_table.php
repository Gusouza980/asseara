<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngenheirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engenheiros', function (Blueprint $table) {
            $table->id();
            $table->string("cpf", 30)->nullable();
            $table->string("senha", 255)->nullable();
            $table->string("nome")->nullable();
            $table->string("telefone", 30)->nullable();
            $table->string("titulo", 100)->nullable();
            $table->string("registro", 50)->nullable();
            $table->string("inscricao", 50)->nullable();
            $table->string("rua")->nullable();
            $table->string("numero", 10)->nullable();
            $table->string("complemento")->nullable();
            $table->string("cidade", 100)->nullable();
            $table->string("uf", 6)->nullable();
            $table->string("cep", 20)->nullable();
            $table->string("email")->nullable();
            $table->tinyInteger("aprovado")->default(0);
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
        Schema::dropIfExists('engenheiros');
    }
}
