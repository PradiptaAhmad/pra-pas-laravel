<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function index()
    {
        return view('layout.laptop', [
            'laptops' => Laptop::all()
        ]);
    }
    public function show($id)
    {
        return view('layout.detail_laptop', [
            'laptop' => Laptop::find($id)
        ]);
    }
}
