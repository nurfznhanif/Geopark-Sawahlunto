<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Galeri;
use App\Models\Layanan_poliklinik;
use App\Models\Partnership;
use App\Models\Destination;
use App\Models\KategoriGaleri;


class MainController extends Controller
{
    public function index()
    {
        return view('/beranda', [
            'tittle' => 'Beranda',
            'posts' => Blog::latest()->paginate(3),
            'galeris' => Galeri::paginate(6),
            'partnership' => Partnership::paginate(6),
        ]);
    }

    public function tentang()
    {
        return view('/tentang', [
            'tittle' => 'Tentang Kami'
        ]);
    }

    public function destinasi()
    {
        $destinasi = destination::paginate(6);
        return view('destinasi', compact('destinasi'));
    }

    public function detail($id)
    {
        $destinasi = destination::findOrFail($id);
        return view('detaildestinasi', compact('destinasi'));
    }

    public function kajian()
    {
        return view('/kajian', [
            'tittle' => 'Kajian'
        ]);
    }

    public function galeriIndex()
    {
        return view('galeri/galeriGuest', [
            'tittle' => 'Galeri',
            'galeris' => Galeri::latest()->filter(request(['search']))->paginate(9)->withQueryString(),
            'kategories' => KategoriGaleri::all()
        ]);
    }

    public function partnerIndex()
    {
        return view('partnership/partnership', [
            'tittle' => 'Our Partnership',
            'partnership' => Partnership::all()
        ]);
    }
}
