<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animaux', function (Blueprint $animaux) {
            $animaux->String('nom');
            $animaux->String('type');
            $animaux->String('scale')->nullable();;
            $animaux->String('fur')->nullable();;
            $animaux->String('feather')->nullable();;
            $animaux->primary('nom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux');
    }
}
