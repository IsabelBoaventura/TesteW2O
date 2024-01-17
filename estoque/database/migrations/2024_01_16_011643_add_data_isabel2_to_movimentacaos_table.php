<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataIsabel2ToMovimentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movimentacaos', function (Blueprint $table) {
            $table->dateTime('data_isabel2')->default('1981-08-31 06:12:50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movimentacaos', function (Blueprint $table) {
            $table->dropColumn('data_isabel2');
        });
    }
}
