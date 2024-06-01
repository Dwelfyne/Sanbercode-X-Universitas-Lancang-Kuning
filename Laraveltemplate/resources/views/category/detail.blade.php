@extends('layouts.master')
@section('title')
    Halaman Detail Casting
@endsection

@section('content')
    <h1>{{ $category->nama }}</h1>
    <h2 style="font-size: 1.5em;">{{ $category->umur }} Tahun</h2>
    <p>{{ $category->bio }}</p>

    <a href="/category" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
