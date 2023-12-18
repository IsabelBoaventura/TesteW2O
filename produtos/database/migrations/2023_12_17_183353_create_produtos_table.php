<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);  
            $table->string('descricao', 200)->nullable();
            $table->decimal('preco', 10, 2);
            $table->string('foto', 200);
            $table->date('data_vencimento')->nullable();          
            $table->timestamps();
            $table->string('sku', 20)->unique();
           

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
