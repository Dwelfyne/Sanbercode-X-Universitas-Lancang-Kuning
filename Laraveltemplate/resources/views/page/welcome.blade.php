@extends('layouts.master')

@section('title')
    Halaman Biodata
@endsection

@section('content')
    <form action="/home"></form>

    <body>
        <h1>Selamat Datang {{ $fistname }} {{ $lastname }}</h1>
        <h2>Terima kasih telah bergabung di SanberBook. Sosial media kita bersama</h2>
    </body>
@endsection
