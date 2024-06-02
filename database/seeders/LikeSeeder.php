<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LikeModel;
use App\Models\UserModel;
use App\Models\PostinganModel;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Mendapatkan beberapa id pengguna dan postingan
        $userIds = UserModel::pluck('id')->toArray();
        $postIds = PostinganModel::pluck('id')->toArray();

        // Menambahkan beberapa data like
        foreach ($userIds as $userId) {
            // Ambil postingan acak
            $postId = $postIds[array_rand($postIds)];

            // Pastikan pengguna belum melakukan like pada postingan tersebut
            $existingLike = LikeModel::where('user_id', $userId)->where('post_id', $postId)->exists();
            if (!$existingLike) {
                // Simpan data like
                LikeModel::create([
                    'user_id' => $userId,
                    'post_id' => $postId,
                ]);
            }
        }
    }
}
