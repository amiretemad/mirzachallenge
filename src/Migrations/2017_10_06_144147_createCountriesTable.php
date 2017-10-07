<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    // Creating Table When Table haven't created
    if (!Schema::hasTable('Countries')) {
      Schema::create('Countries', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('country_name', '63');
      });
      // Insert some records to table
      DB::table('Countries')->insert([
        ['country_name' => 'turkey'],
        ['country_name' => 'iran']
      ]);
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    // Drop Table If Exist
    Schema::dropIfExists('Countries');
  }
}
