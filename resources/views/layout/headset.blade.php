@extends('layout.main')

@section('container')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Nama</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($headsets as $headset)
                <tr>
                    <td>
                        <img src="{{ asset($headset['gambar']) }}" alt="" height="100" >
                    </td> 
                    <td>{{ $headset['nama']}}</td>
                    <td>
                        <a href="{{ url('/headset/' . $headset['id']) }}" type="button" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
