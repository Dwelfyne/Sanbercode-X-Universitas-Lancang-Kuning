@extends('layouts.master')
@section('title')
    Halaman Edit Casting
@endsection

@section('content')
    <form method="post" action='/category/{{ $category->id }}'>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama Casting</label>
            <input type="text" value="{{ $category->nama }}" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" value="{{ $category->umur }}" class="form-control" name="umur">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{ $category->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
