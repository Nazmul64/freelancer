<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class FrontendedController extends Controller
{
  public function  frontent(){
        $headershow=Header::all();
        return view('frontent.index',compact('headershow'));
  }
}
