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
            $table->longText('text1');
            $table->longText('text2');
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
        Schema::table('experience_descriptions', function(Blueprint $table){
          $table->dropForeign(['experience_id']);
        });
        Schema::dropIfExists('experience_descriptions');
    }
}
