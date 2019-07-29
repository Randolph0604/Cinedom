<?php

namespace App\Http\Controllers;


class UrlPageController extends Controller
{
  
    public function index()
    {
        return view ("index");
    }

    public function trailers()
    {
        return view ("trailers");
    }

    public function contacto()
    {
        return view ("contacto");
    }

    public function login()
    {
        return view ("login");
    }


}
