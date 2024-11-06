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

        $articles = Article::with('writer')->paginate(3); 

    
        // Mengirim data ke view
        return view('funedu.popular', compact('articles'));
    }

    
    /**
     * Menampilkan artikel berdasarkan ID.
     */
    public function show($id)
    {

        $article = Article::with('writer')->findOrFail($id); 

        return view('funedu.popularshow', compact('article'));
    }
    

    

}


