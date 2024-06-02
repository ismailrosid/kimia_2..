<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostinganModel extends Model
{
    use HasFactory;
    protected $table = 'tb_postingan';
    protected $fillable = ['user_id', 'image', 'description'];

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id');
    }

    public function likes()
    {
        return $this->hasMany(LikeModel::class, 'post_id'); // Sesuaikan dengan nama kolom kunci asing yang benar
    }

    public function comments()
    {
        return $this->hasMany(CommentModel::class, 'post_id');
    }

    public function bookmarks()
    {
        return $this->hasMany(BookmarkModel::class, 'post_id');
    }
}
