<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArm3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_arm3', function (Blueprint $table) {
            $table->id();
            $table->integer("Engin1");
            $table->integer("Engin2");
            $table->integer("Engin3");
            $table->integer("Engin4");
            $table->integer("Engin5");
            $table->integer("Engin6"); 
           
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
        Schema::dropIfExists('_arm3');
    }
}
