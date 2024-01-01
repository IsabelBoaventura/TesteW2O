<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('produto_id');
            $table->date('data_movimento');
            $table->string('tipo_movimento', 10);           
            $table->double('quantidade', 20, 2);
            $table->double('estoque_atual', 20, 2);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentacaos');
    }
}
