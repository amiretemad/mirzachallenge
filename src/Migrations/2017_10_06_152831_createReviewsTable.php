<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    // Creating Table When Table haven't created
    if (!Schema::hasTable('Reviews')) {
      Schema::create('Reviews', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->text('text');
        $table->integer('reviewable_id')->unsinged();
        $table->string('reviewable_type');
      });
      // Insert some records to table
      DB::table('Reviews')->insert([
        ['text' => 'The Ritz-Carlton, Istanbul is very good hotel', 'reviewable_id' => 1, 'reviewable_type' => 'amiretemad\mirzachallenge\Models\HotelsModel'],
        ['text' => 'Hotel Mercure Istanbul Taksim is cheaper than others !', 'reviewable_id' => 2, 'reviewable_type' => 'amiretemad\mirzachallenge\Models\HotelsModel'],
        ['text' => 'Hotel pars tabriz is expensive !', 'reviewable_id' => 4, 'reviewable_type' => 'amiretemad\mirzachallenge\Models\HotelsModel'],
        ['text' => 'Turkey is very beautiful ', 'reviewable_id' => 1, 'reviewable_type' => 'amiretemad\mirzachallenge\Models\CountriesModel'],
        ['text' => 'Iran review', 'reviewable_id' => 2, 'reviewable_type' => 'amiretemad\mirzachallenge\Models\CountriesModel'],
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
    Schema::dropIfExists('Reviews');
  }
}
