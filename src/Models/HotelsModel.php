<?php

namespace amiretemad\mirzachallenge\Models;

use Illuminate\Database\Eloquent\Model;

class HotelsModel extends Model {

  // Set Table Name
  protected $table = 'Hotels';
  // Set TimeStamp Flags
  public $timestamps = false;

  // Relation with country
  public function countries() {
      return $this->hasOne('amiretemad\mirzachallenge\Models\CountriesModel', 'id', 'countries_id');
  }

  // Get Reviews related to Hotel Model
  public function reviews() {
    return $this->morphMany('amiretemad\mirzachallenge\Models\ReviewsModel', 'reviewable');
  }

}
