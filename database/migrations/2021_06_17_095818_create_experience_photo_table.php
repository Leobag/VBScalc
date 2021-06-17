<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class CreateExperiencephotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_photo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('experience_id')->constrained()->cascadeOnDelete();
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
        Schema::table('experience_photo', function(Blueprint $table){
          $table->dropForeign(['experience_id']);
        });
        Schema::dropIfExists('experience_photo');
    }
}
