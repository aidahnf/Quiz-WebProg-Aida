<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class writerController extends Controller 
{
    public function index()
    {
        // Mengambil semua writer
        $writers = Writer::all();
        
        // Mengirim data ke view
        return view('funedu.writers', compact('writers')); 
    }

    public function show($id)
    {
        // Mencari writer berdasarkan ID
        $writer = Writer::findOrFail($id);
        
        // Mengirim data writer ke view
        return view('funedu.writer.show', compact('writer')); 
    }
}
