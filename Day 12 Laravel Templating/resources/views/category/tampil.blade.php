@extends('layouts.master')
@section('title')
    Halaman Tampilan Casting
@endsection

@section('content')
    <a href="/category/create" class="btn btn-sm btn-primary">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key=>$item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>

                        <form action="/category/{{ $item->id }}" method="post">
                            <a href="/category/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/category/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Casting tidak Terdaftar</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
