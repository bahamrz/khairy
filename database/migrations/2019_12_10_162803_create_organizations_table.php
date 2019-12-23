<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('Org_Id');
            $table->string('Org_Name');
            $table->mediumText('Org_Desc');
<<<<<<< HEAD
           // $table->string('Org_Logo')->nullable();
=======
            //$table->string('Org_Logo')->nullable();
>>>>>>> 98e580053791046146b6b5269579efe185d88395
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
        Schema::dropIfExists('organizations');
    }
}
