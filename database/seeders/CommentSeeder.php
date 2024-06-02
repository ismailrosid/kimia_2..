<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommentModel;
use App\Models\UserModel;
use App\Models\PostinganModel;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Mendapatkan beberapa id pengguna dan postingan
        $userIds = UserModel::pluck('id')->toArray();
        $postIds = PostinganModel::pluck('id')->toArray();

        // Menambahkan beberapa data komentar
        foreach ($userIds as $userId) {
            // Ambil postingan acak
            $postId = $postIds[array_rand($postIds)];

            // Simpan data komentar
            CommentModel::create([
                'user_id' => $userId,
                'post_id' => $postId,
                'comment' => 'Ini adalah contoh komentar.',
            ]);
        }
    }
}
