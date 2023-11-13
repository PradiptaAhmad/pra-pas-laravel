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
            @foreach ($handphones as $hp)
                <tr>
                    <td>
                        <img src="{{ asset($hp['gambar']) }}" alt="" height="100" >
                    </td> 
                    <td>{{ $hp['nama']}}</td>
                    <td>
                        <a href="{{ url('/handphone/' . $hp['id']) }}" type="button" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
