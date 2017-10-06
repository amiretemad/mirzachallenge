<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    // Creating Table When Table haven't created
    if (!Schema::hasTable('Hotels')) {
      Schema::create('Hotels', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('hotel_name', "127");
        $table->integer('countries_id')->unsigned();
      });
      // Add Foreign key To hotels Table
      Schema::table('Hotels', function ($table) {
        $table->foreign('countries_id')->references('id')->on('Countries')->onDelete('cascade');
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    // Drop If Table Exist
    Schema::dropIfExists('Hotels');
  }
}
