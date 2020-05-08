<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::paginate(5);
        return view('adverts.advert', compact('adverts'));
    }
}
