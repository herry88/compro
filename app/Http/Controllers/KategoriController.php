<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->orderBy('urutan', 'ASC')->get();
        $data = array(
            'title' => 'Kategori Berita',
            'kategori' => $kategori,
            'content' => 'admin/kategori/index'
        );
        return view('admin.kategori.index', $data);
    }
}
