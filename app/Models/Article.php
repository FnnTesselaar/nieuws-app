<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'articlesId');  
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'categoriesId');
    }
  
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tagArticle', 'articlesId', 'tagsId');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
