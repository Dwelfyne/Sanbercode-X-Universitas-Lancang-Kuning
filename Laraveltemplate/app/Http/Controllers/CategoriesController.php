<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("category.tampil", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|min:5',
                'umur' => 'required',
                'bio' => 'required',
            ],
            [
                'nama.required' => 'Nama Harus Diisi, Isilah Nama Anda!',
                'umur.required' => 'Umur Harus Diisi, Isilah Usia Anda Saat Ini!',
                'bio.required' => 'Bio Harus Diisi, Isilah Biografi Anda!',
            ]
        );
        $category = new Category;

        $category->nama = $request->input('nama');
        $category->umur = $request->input('umur');
        $category->bio = $request->input('bio');
        $category->save();

        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('category.detail', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required|min:5',
                'umur' => 'required',
                'bio' => 'required',
            ],
            [
                'nama.required' => 'Nama Harus Diisi, Isilah Nama Anda!',
                'umur.required' => 'Umur Harus Diisi, Isilah Usia Anda Saat Ini!',
                'bio.required' => 'Bio Harus Diisi, Isilah Biografi Anda!',
            ]
        );
        Category::where('id', $id)
            ->update(
                [
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
                ]
            );
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();

        return redirect('/category');
    }
}
