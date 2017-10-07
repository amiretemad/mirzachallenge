<?php

namespace amiretemad\mirzachallenge\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewsModel extends Model {

  // Set Table Name
  protected $table = 'Reviews';

  // Set TimeStamp Flags
  public $timestamps = false;

  public function reviewable() {
    return $this->morphTo();
  }

}
