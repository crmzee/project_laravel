@extends('layouts.master')

@section('content')
<div class="alert alert-primary" role="alert">
    <h1> Selamat Datang! </h1>
	<p> Perkenalkan saya {{$nama}} dari kelas {{$kelas}} dengan nim {{$nim}}</p>
</div>

@endsection
