<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostinganModel;
use App\Models\UserModel;

class PostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Mendapatkan beberapa id pengguna
        $userIds = UserModel::pluck('id')->toArray();

        // Menambahkan beberapa data postingan
        foreach ($userIds as $userId) {
            PostinganModel::create([
                'user_id' => $userId,
                'image' => 'coba.jpg',
                'description' => 'Ini adalah contoh deskripsi postingan.',
            ]);
        }
    }
}
