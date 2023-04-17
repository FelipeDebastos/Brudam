<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->renameColumn('valor', 'valor_frete');
            $table->renameColumn('data', 'data_entrega');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->renameColumn('valor_frete', 'valor');
            $table->renameColumn('data_entrega', 'data');
        });
    }
};
