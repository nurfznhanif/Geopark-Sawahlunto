<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function home()
    {
        $home = Auth::user();
        return view('home', compact('home'));
    }

    // public function destinasi() {
    //     $destinasi = destination::paginate(2);
    //     return view('destinasi', compact('destinasi'));
    // }

    public function admin()
    {
        return view('admin.home');
    }
    public function contri()
    {
        return view('contri.home');
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

    public function filter(Request $request)
    {
        $destinasi = destination::where('dest_category', 'LIKE', '%' . $request->selectcategory . '%')
            ->paginate(6);
        $destinasi->withPath('filter');
        $destinasi->appends($request->all());
        return view('destinasi', compact('destinasi'));
    }

    public function profil()
    {
        return view('card');
    }
}
