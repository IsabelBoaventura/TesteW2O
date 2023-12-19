<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('produto_id');
            $table->date('data_movimento');      
            $table->string('tipo_movimento',1);
            //tipo_movimento: 'E' = Entrada 'S' = saida 
            $table->decimal('quantidade', 10, 2);
            $table->decimal('estoque_atual', 10, 2);         

            //usuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentacao');
    }
}
