<?php

namespace App\Modules\Api\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Api\Models\CountryModel;
use Illuminate\Http\Request;

class CountryController extends Controller {

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  //find all
  public function allCounties() {
    $countries = CountryModel::all();
    return $countries;
  }

}
