@extends('layouts.master')

@section('content')
    <ul>
        @foreach ($mahasiswa as $nama)
            <li>{{ $nama }}</li>
        @endforeach
    </ul>
@endsection