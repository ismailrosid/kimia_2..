<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\CommentModel;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'comment' => 'required|string',
            'post_id' => 'required',
        ]);


        // Menyimpan data dengan metode create
        $comment = CommentModel::create([
            'user_id' => 1,
            'post_id' => $request->post_id,
            'comment' =>  $request->comment
        ]);
        // Simpan komentar ke dalam database
        // $comment = new Comment();
        // $comment->comment = $request->comment;
        // // Jika Anda memiliki kolom tambahan, tambahkan di sini
        // $comment->save();

        // // Redirect atau lakukan tindakan lain setelah komentar berhasil disimpan
        return back()->with('success', 'Komentar berhasil disimpan.');
    }
}
