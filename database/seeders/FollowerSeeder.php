<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FollowerModel;
use App\Models\UserModel;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mendapatkan beberapa id pengguna
        $userIds = UserModel::pluck('id')->toArray();

        // Menambahkan beberapa data pengikut
        foreach ($userIds as $userId) {
            // Membuat pengikut acak
            $randomUserId = $userIds[array_rand($userIds)];

            // Pastikan pengikut tidak sama dengan pengguna itu sendiri
            while ($randomUserId == $userId) {
                $randomUserId = $userIds[array_rand($userIds)];
            }

            // Simpan data pengikut
            FollowerModel::create([
                'follower_id' => $userId,
                'followed_id' => $randomUserId,
            ]);
        }
    }
}
