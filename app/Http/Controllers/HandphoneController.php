<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handphone;

class HandphoneController extends Controller
{
    public function index()
    {
        return view('layout.handphone', [
            'handphones' => Handphone::all()
        ]);
    }

    public function show($id){
        return view('layout.detail', [
            'handphone' => Handphone::find($id)
        ]);
    }
}
