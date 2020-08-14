<?php

namespace App\Http\Controllers\Web;

use App\Artikel;
use App\Categori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categori = Categori::all();
        $artikel = Artikel::latest()->get()->random(2);

        $artikelall = Artikel::latest()->get();
        $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('front', compact('categori', 'artikel', 'artikelall', 'artikelterkait'));
    }

    public function show(Artikel $artikel)
    {
        // return $artikel;
        $artikel_detail = $artikel;
        $categori = Categori::withCount('Artikel')->get();
        $artikelterkait = Artikel::latest()->get()->random(3);
        // $categori_count = Categori::withCount('Artikel')->get();

        // return $categori_count;
        // die;
        return view('front.artikel_detail', compact('categori', 'artikel_detail', 'artikelterkait'));
    }

    public function artikel_kategori(Categori $kategori)
    {
        $categori = Categori::all();
        $artikel = Artikel::latest()->get()->random(2);

        $artikelall = $kategori->Artikel()->get();
        $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('front', compact('categori', 'artikel', 'artikelall', 'artikelterkait'));

    }
    public function about(Request $request)
    {
        $categori= Categori::all();
        $artikel = Artikel::latest()->get()->random(4);
        return view('about', compact('categori','artikel'));
    }
    public function contact(Request $request)
    {
        $categori= Categori::all();
        $artikel = Artikel::latest()->get()->random(4);
        return view('contact', compact('categori','artikel'));
    }
}
