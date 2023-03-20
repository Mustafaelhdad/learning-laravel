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

  // public function store() {
  //   App\Models\Offer::create([
  //     'name' => 'some offer',
  //     'price' => '2334',
  //     'details' => 'Details of the offer'
  //   ]);
  // }

  public function create() {
    return view('offer.create');
  }

  public function store(Request $request) {
    $rules = [
      'name' => 'required|max:100|unique:offers,name',
      'price' => 'required|numeric',
      'details' => 'required',
    ];

    // data validation
    $validator = Validator::make($request->all(), $rules, [
      'name.required' => 'هطا ما رسالة مخصصة',
      'name.unique' => 'هطا ما رسالة مخصصة',
      'price.numeric' => 'هطا ما رسالة مخصصة',
    ]);

    if($validator -> fails()) {
      return $validator -> errors();
      // return $validator -> errors() -> first();
    }

    // insert data
    Offer::create([
      'name' => $request -> name,
      'price' => $request -> price,
      'details' => $request -> details,
    ]);

    return 'saved successfuly';
  }
}