<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroDeClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('cadastro_de_clientes')) {
            Schema::create('cadastro_de_clientes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome')->nullable();
                $table->string('nome_fantasia')->nullable();
                $table->string('endereco')->nullable();
                $table->string('bairro')->nullable();
                $table->string('cep')->nullable();
                $table->string('cnpj')->nullable();
                $table->string('vcto_primeira_quinzena')->nullable();
                $table->string('vcto_segunda_quinzena')->nullable();
                $table->string('vcto_mensal')->nullable();
                $table->string('rota')->nullable();
                $table->string('telefone')->nullable();
                $table->string('contato')->nullable();
                $table->string('email')->nullable();
                
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
        Schema::dropIfExists('cadastro_de_clientes');
    }
}
