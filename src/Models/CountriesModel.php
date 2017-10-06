<?php

namespace amiretemad\mirzachallenge\Models;

use Illuminate\Database\Eloquent\Model;

class CountriesModel extends Model {

  // Set Table Name
  protected $table = 'Countries';
  // Set TimeStamp Flags
  public $timestamps = false;

  // Relation with country
  public function hotels() {
    return $this->hasMany('amiretemad\mirzachallenge\Models\HotelsModel', 'countries_id');
  }

  // Get Reviews related to Country Model
  public function reviews() {
    return $this->morphMany('amiretemad\mirzachallenge\Models\ReviewsModel', 'reviewable');
  }

}
