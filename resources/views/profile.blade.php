@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <P>
        Nama : {{ $name }} <br>
        Nim : {{ $nim }} <br>
        Prodi : {{ $prodi }}<br>
    </p>
    <img src="images/{{ $gambar }}" width="200" height="200">
@endsection