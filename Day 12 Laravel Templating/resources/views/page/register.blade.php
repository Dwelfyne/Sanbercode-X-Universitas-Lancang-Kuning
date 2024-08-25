@extends('layouts.master')
@section('title')
    Daftar
@endsection
@section('content')
    <h1>Daftar Sanberbook</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="">First Name :</label><br>
        <input type="text" name="ndepan" id=""><br>
        <label for="">Last Name :</label><br>
        <input type="text" name="nbelakang" id=""><br><br>
        <button type="submit">Sign Up</button>
        <a href="/">Kembali</a>
    </form>
    </form>
    </form>
@endsection
