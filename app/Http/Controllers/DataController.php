<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;
use App\Models\AboutUs;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Divisi;
use App\Models\Faq;

class DataController extends Controller
{
    public function index()
    {
        // Ambil semua data yang dibutuhkan
        $visiMisi = VisiMisi::first();
        $aboutUs = AboutUs::all();
        $beritas = Berita::latest()->take(3)->get();
        $galeris = Galeri::take(9)->get();
        $divisis = Divisi::all();
        $faqs = Faq::all();

        $misi = str_replace("\n", "<br><br>", $visiMisi->misi ?? 'Data belum tersedia');
        return view('index', compact('visiMisi', 'aboutUs', 'beritas', 'galeris', 'divisis','faqs', 'misi'));
    }
    
    public function showDivisi($id)
    {
        $divisi = Divisi::findOrFail($id);
        $desc_divisi = str_replace("\n", "<br>", $divisi->description ?? 'Data belum tersedia');
        return view('divisi.show', compact('divisi', 'desc_divisi'));
    }
    
    public function showBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $desc_berita = str_replace("\n", "<br>", $berita->content ?? 'Data belum tersedia');
        return view('berita.show', compact('berita', 'desc_berita'));
    }

    public function showGaleri()
    {
        $galeri = Galeri::all();
        return view('galeri.show', compact('galeri'));
    }
}
