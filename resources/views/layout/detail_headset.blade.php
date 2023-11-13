<!-- resources/views/handphones/show.blade.php -->

@extends('layout.main')

@section('container')
    <div class="container mx-auto mt-10 p-5">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-md shadow-md">
            <h1 class="text-4xl font-bold mb-4 text-gray-800">{{ $headset->nama }}</h1>
            <p class="text-gray-600 mb-4">Brand: {{ $headset->merk }}</p>
            <p class="text-gray-600 mb-4">Harga: Rp. {{ $headset->harga }}</p>
            <p class="text-gray-600 mb-4">Release Date: {{ $headset->release_date }}</p>
            <img src="{{ asset($headset->gambar) }}" alt="{{ $headset->nama }}" class="mb-6 rounded-lg w-full" height="200">
        </div>
    </div>
@endsection
