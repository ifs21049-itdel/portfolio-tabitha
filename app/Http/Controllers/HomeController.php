<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('home', compact('portofolios'));
    }
    public function create()
    {
        return view('create'); // Buat halaman create untuk menambah data
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'url' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan gambar ke dalam folder 'public/images'
        $gambarPath = $request->file('gambar')->store('images', 'public');

        // Simpan data ke dalam database
        Portofolio::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'url' => $request->url,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('home')->with('status', 'Portofolio berhasil ditambahkan');
    }

    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        return view('home.edit', compact('portofolio'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'url' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $portofolio = Portofolio::find($id);

            $portofolio->judul = $request->input('judul');
            $portofolio->deskripsi = $request->input('deskripsi');
            $portofolio->url = $request->input('url');

            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                Storage::delete($portofolio->gambar);

                // Simpan gambar baru
                $gambarPath = $request->file('gambar')->store('images', 'public');
                $portofolio->gambar = $gambarPath;
            }

            $portofolio->save();

            return redirect()->route('home')->with(['status' => 'Data berhasil diperbarui']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    // app/Http/Controllers/HomeController.php
    public function destroy($id_portofolio)
    {
        // Cari portofolio berdasarkan ID dan hapus
        $portofolio = Portofolio::find($id_portofolio);
        if ($portofolio) {
            $portofolio->delete();
            return redirect()->route('home')->with('status', 'Portofolio berhasil dihapus');
        }

        return redirect()->route('home')->with('status', 'Portofolio tidak ditemukan');
    }
}
