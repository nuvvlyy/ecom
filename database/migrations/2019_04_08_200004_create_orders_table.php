<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('order_id');
            $table->string('user_id');
            $table->string('labor');
            $table->string('product');
            $table->string('start_county');
            $table->string('start_zone');
            $table->string('namestart');
            $table->string('telstart');
            $table->date('date_start');
            $table->string('destination_county');
            $table->string('destination_zone');
            $table->string('namedestination');
            $table->string('teldestination');
            $table->string('weight');
            $table->string('wide');
            $table->string('long');
            $table->string('high');
            $table->timestamps();
            //'labor','product','start_county','start_zone','date_start','namestart','telstart','destination_county','destination_zone','namedestination','teldestination'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
