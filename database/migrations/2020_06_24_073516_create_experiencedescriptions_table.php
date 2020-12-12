<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencedescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('years');
            $table->foreignId('experience_id')->constrained();
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
        Schema::table('experience_descriptions', function(Blueprint $table){
          $table->dropForeign(['experience_id']);
        });
        Schema::dropIfExists('experiencedescriptions');
    }
}