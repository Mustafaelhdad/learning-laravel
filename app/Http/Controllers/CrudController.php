<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;

class CrudController extends Controller {
  public function __construct() {

  }

  public function getOffers() {
    return Offer::seletct('id', 'name') -> get();
  }

  public function store() {
    App\Models\Offer::create([
      'name' => 'some offer',
      'price' => '2334',
      'details' => 'Details of the offer'
    ]);
  }
}