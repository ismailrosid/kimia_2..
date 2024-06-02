<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookmarksModel;
use App\Models\UserModel;
use App\Models\PostinganModel;

class BookmarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Mendapatkan beberapa id pengguna dan postingan
        $userIds = UserModel::pluck('id')->toArray();
        $postIds = PostinganModel::pluck('id')->toArray();

        // Menambahkan beberapa data bookmark
        foreach ($userIds as $userId) {
            // Ambil postingan acak
            $postId = $postIds[array_rand($postIds)];

            // Pastikan bookmark tidak ada duplikat
            $existingBookmark = BookmarksModel::where('user_id', $userId)->where('post_id', $postId)->exists();
            if (!$existingBookmark) {
                // Simpan data bookmark
                BookmarksModel::create([
                    'user_id' => $userId,
                    'post_id' => $postId,
                ]);
            }
        }
    }
}
