<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rumahSakits = RumahSakit::all();
        return view('rumah-sakit.index', compact('rumahSakits'));
    }
}
