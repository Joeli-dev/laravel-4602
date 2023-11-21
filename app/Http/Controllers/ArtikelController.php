<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request){
        $artikel = new Artikel;
        $artikel->judul = $request->input('judul');
        $artikel->isi = $request->input('isi');
        $artikel->save();

        return redirect()->route('artikel.index');
    }

    public function show($id){
        $artikel = Artikel::find($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = Artikel::find($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request){
        $artikel = Artikel::find($id);
        $artikel->judul = $request->input('judul');
        $artikel->isi = $request->input('isi');
        $artikel->save();

        return redirect()->route('artikel.index');

    }

    public function destroy($id){
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->route('artikel.index');
    }
    //
}
