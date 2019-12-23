<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationResarvationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_resarvations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')
                  ->references('id')
                  ->on('users');
            $table->integer('product_id')
                  ->references('id')
                  ->on('products');
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
        Schema::dropIfExists('donation_resarvations');
    }
}
