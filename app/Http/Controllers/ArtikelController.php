<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Categori;
use Storage;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::latest()->paginate(5);

        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categori = Categori::select('id', 'nama_kategori')->get();

        return view('artikel.create', compact('categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'body' => 'required',
            'gambar' => 'mimes:png,jpg,bmp',
        ]);

        // $image = $request->file('gambar')->store('artikel');
        if (empty($request->file('gambar'))) {
            Artikel::create([
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                'categories_id' => $request->categories_id,
            ]);
        } else {
            Artikel::create([
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                'gambar' => $request->file('gambar')->store('artikel'),
                'categories_id' => $request->categories_id,
            ]);
        }
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categori = Categori::Select('id', 'nama_kategori')->get();
        $artikel = Artikel::find($id);

        return view('artikel.edit', compact('categori', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $categori = Categori::find($id);
        $this->validate($request, [
            'judul' => 'required',
            'body' => 'required',
            'gambar' => 'mimes:png,jpg,bmp',
        ]);
        if (empty($request->file('gambar'))) {
            $artikel = Artikel::find($id);
            // Storage::delete($artikel->gambar);
            $artikel->update([
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                // 'gambar' => $request->file('gambar')->store('artikel'),
                'categories_id' => $request->categories_id,
            ]);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar);
            $artikel->update([
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                'gambar' => $request->file('gambar')->store('artikel'),
                'categories_id' => $request->categories_id,
            ]);
        }
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return redirect()->back();
        }
        Storage::delete($artikel->gambar);
        $artikel->delete();

        return redirect()->route('artikel.index');
    }
}
