<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ElementFormation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ElementFormation', function (Blueprint $table) {
            $table->id('idElementFormation');
            $table->string('libelleElementFormation');
            $table->integer('idPere')->nullable();
            $table->foreign('idPere')->references('idElementFormation')->on('ElementFormation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ElementFormation');
    }
}
