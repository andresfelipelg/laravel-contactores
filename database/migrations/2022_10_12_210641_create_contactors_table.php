<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('referencia');
            $table->string('voltaje');
            $table->string('bobina');
            $table->string('refe_bobina');
            $table->string('alternativa1');
            $table->string('referencia1');
            $table->string('alternativa2');
            $table->string('referencia2');
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
        Schema::dropIfExists('contactors');
    }
};
