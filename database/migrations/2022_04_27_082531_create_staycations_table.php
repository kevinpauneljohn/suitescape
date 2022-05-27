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
            $table->string('typeofPlace');
            $table->string('typeofHouse')->nullable();
            $table->string('privacyType');
            $table->string('address');
            $table->integer('numberGuest');
            $table->integer('numberBed');
            $table->integer('numberBedrooms');
            $table->integer('numberBathrooms');
            $table->json('amenities')->nullable();
            $table->string('guestFavorite')->nullable();
            $table->string('safetyItem')->nullable();
            $table->string('mainImg');
            $table->string('subImg1');
            $table->string('subImg2');
            $table->string('subImg3');
            $table->string('subImg4');
            $table->text('name');
            $table->string('highlight')->nullable();
            $table->string('detail');
            $table->float('price');
            $table->string('security')->nullable();
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
