<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Menampilkan semua artikel.
     */
    public function index()
    {
        // Mengambil artikel beserta informasi writer dengan pagination
        $articles = Article::with('writer')->paginate(6); // Mengambil 5 artikel per halaman

    
        // Mengirim data ke view
        return view('funedu.popular', compact('articles'));
    }

    /**
     * Menampilkan artikel berdasarkan ID.
     */
    public function show($id)
    {
        // Mencari artikel berdasarkan ID
        $article = Article::with('writer')->findOrFail($id); 
    
        // Mengirim data artikel ke view
        return view('funedu.popularshow', compact('article'));
    }
    

    

}


