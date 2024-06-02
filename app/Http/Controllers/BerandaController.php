<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostinganModel;


class BerandaController extends Controller
{
    public function index()
    {
        $postingan = PostinganModel::with(['user', 'likes', 'comments'])
            ->orderBy('created_at', 'desc')
            ->get();

        //  
        return view('pages.beranda.index', compact('postingan'));
    }
}
