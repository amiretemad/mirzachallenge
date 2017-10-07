<?php

namespace amiretemad\mirzachallenge\Controllers;

use amiretemad\mirzachallenge\Models\CountriesModel;
use amiretemad\mirzachallenge\Models\HotelsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class mainController extends Controller {

  // Display Index Page
  public function index() {

    try {
      // Check Database connection
      DB::connection()->getPdo();
    } catch (\Exception $e) {
      die("Could not connect to the database.  Please check your configuration.");
    }

    // Check Package Tables created or not
    if (Schema::hasTable('Hotels') && Schema::hasTable('Countries') && Schema::hasTable('Reviews')) {
      // Get Countries List
      $countriesData = CountriesModel::with('hotels')->get()->toArray();
      // Get Hotels List
      $hotelsData = HotelsModel::with('countries')->get()->toArray();
      // Get Hotel Reviews
      $hotelReviews = array();
      $hotelModelCollection = HotelsModel::all();
      foreach ($hotelModelCollection as $review) {
        $data = $review->reviews->first();
        if ($data != null) {
          $reviewInfo = $review->reviews->first()->toArray();
          if (is_array($reviewInfo) && count($reviewInfo) > 0) {
            $hotelReviews[] = $reviewInfo;
          }
        }
      }
      // Get Country Reviews
      $countryReviews = array();
      $countryModelCollection = CountriesModel::all();
      foreach ($countryModelCollection as $review) {
        $data = $review->reviews->first();
        if ($data != null) {
          $reviewInfo = $review->reviews->first()->toArray();
          if (is_array($reviewInfo) && count($reviewInfo) > 0) {
            $countryReviews[] = $reviewInfo;
          }
        }
      }
      return view("mirzachallenge::index", compact('countriesData', 'hotelsData', 'countryReviews', 'hotelReviews'));
    } else {
      echo 'for creating tables please run this command -----> php artisan migrate ';
    }
  }

}
