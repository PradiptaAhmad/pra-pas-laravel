<?php

namespace App\Http\Controllers;

use App\Models\Headset;
use Illuminate\Http\Request;

class HeadsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.headset', [
            'headsets' => Headset::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('layout.detail_headset', [
            'headset' => Headset::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Headset $headset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Headset $headset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Headset $headset)
    {
        //
    }
}
