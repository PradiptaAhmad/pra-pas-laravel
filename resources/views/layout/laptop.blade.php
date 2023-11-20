@extends('layout.main')

@section('container')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Nama</th>
                <th scope="col">Merk</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>
                        <img src="{{ asset($laptop['gambar']) }}" alt="" height="100" >
                    </td> 
                    <td>{{ $laptop['nama']}}</td>
                    <td>{{ $laptop['Merk']}}</td>
                    <td>
                        <a href="{{ url('/laptop/' . $laptop['id']) }}" type="button" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
