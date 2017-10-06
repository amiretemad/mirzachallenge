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
