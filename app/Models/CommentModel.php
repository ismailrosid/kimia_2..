<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;

    protected $table = 'tb_comment';
    protected $fillable = ['user_id', 'post_id', 'comment'];

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
