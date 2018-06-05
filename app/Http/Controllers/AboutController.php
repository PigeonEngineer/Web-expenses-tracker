<?php
namespace App\Http\Controllers;

class AboutController extends Controller {
  public function __construct()
{
  $this->middleware('auth');
}
    public function getAbout () {
//
        return view('About');
}
}
