<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class AdminController extends Controller
{
    public function index()
    {
        return view('adminView/dashboard', [
            'tittle' => 'Dashboard',
            'posts' => Blog::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString()
        ]);
    }
}
