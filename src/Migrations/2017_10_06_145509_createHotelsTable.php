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
      // Insert some records to table
      DB::table('Hotels')->insert([
        ['hotel_name' => 'The Ritz-Carlton, Istanbul', 'countries_id' => 1],
        ['hotel_name' => 'Hotel Mercure Istanbul Taksim', 'countries_id' => 1],
        ['hotel_name' => 'Hotel Novotel Istanbul Bosphorus', 'countries_id' => 1],
        ['hotel_name' => 'Hotel Pars, Tabriz', 'countries_id' => 2],
        ['hotel_name' => 'Hotel Esteghlal, Tehran', 'countries_id' => 2]
      ]);
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
