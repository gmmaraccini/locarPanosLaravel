<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroDeProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('cadastro_de_produtos')) {
            Schema::create('cadastro_de_produtos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome_do_produto')->nullable();
                $table->string('preco_padrao')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_de_produtos');
    }
}
