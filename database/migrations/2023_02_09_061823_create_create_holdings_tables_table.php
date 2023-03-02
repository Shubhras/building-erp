<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateHoldingsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_holdings_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('holding_id')->nullable(true);
            $table->integer('user_id')->nullable(false);
            $table->decimal('cost_basis',15,6)->nullable(false);
            $table->decimal('price',15,2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_holdings_tables');
    }
}
