<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicedescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
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
        Schema::table('service_descriptions', function(Blueprint $table){
          $table->dropForeign(['service_id']);
        });
        Schema::dropIfExists('service_descriptions');
    }
}
