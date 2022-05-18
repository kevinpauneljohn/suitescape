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
        Schema::create('staycations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->float('price');
            $table->string('mainImg');
            $table->string('subImg1');
            $table->string('subImg2')->nullable();
            $table->string('subImg3')->nullable();
            $table->string('subImg4')->nullable();
            $table->string('address');
            $table->integer('userid');
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
        Schema::dropIfExists('staycations');
    }
};
