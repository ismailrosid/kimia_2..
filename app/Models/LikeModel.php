<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeModel extends Model
{
    use HasFactory;

    protected $table = 'tb_like';
    protected $fillable = ['user_id', 'post_id'];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(UserModel::class);
    }

    // Relasi dengan model Postingan
    public function post()
    {
        return $this->belongsTo(PostinganModel::class);
    }
}
