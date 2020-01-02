<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
  public static function viewMain()
  {
      return view('index');
  }

    public static function viewAbout()
    {
        return view('inside');
    }

    public static function viewServices()
    {
        return view('services');
    }

    public static function viewContacts()
    {
        return view('contact');
    }
}
