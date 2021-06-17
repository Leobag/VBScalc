<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutdescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('about_id')->constrained()->cascadeOnDelete();
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
        Schema::table('about_descriptions', function(Blueprint $table){
          $table->dropForeign(['about_id']);
        });
        Schema::dropIfExists('about_descriptions');
    }
}
