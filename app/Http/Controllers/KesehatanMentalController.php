<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesehatanMentalController extends Controller
{
    public function index()
    {
        return view('kesehatan-mental.index');
    }
}
