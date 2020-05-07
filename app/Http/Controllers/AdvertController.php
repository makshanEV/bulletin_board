<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();
        return view('adverts.advert', compact('adverts'));
    }
}
