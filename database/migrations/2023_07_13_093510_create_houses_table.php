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
        Schema::create('houses', function (Blueprint $table) {
            $table -> id();

            $table -> string('code', 10) -> unique();
            $table -> string('address');
            $table -> string('postal_code', 10);
            $table -> string('city', 64);
            $table -> string('state', 64);
            $table -> integer('square_meters');
            $table -> integer('rooms');
            $table -> integer('bathrooms');
            $table -> string('type', 32);
            $table -> text('description') -> nullable();
            $table -> integer('price');
            $table -> boolean('is_available') -> default(true);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
