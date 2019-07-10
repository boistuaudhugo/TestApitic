<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animauxes', function (Blueprint $animaux) {
            $animaux->bigIncrements('id');
            $animaux->String('nom')->unique();
            $animaux->String('type');
            $animaux->String('scale')->nullable();
            $animaux->String('fur')->nullable();
            $animaux->String('feather')->nullable();
            $animaux->timestamp('updated_at')->nullable();
            $animaux->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animauxes');
    }
}
