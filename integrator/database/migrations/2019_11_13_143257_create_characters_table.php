<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    private const CHARACTERS_TABLE = 'characters';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::CHARACTERS_TABLE, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name');
            $table->char('image_src');
            $table->char('user_name');
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
        Schema::dropIfExists(self::CHARACTERS_TABLE);
    }
}
