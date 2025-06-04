<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Használjuk a HasFactory trait-et, hogy gyárthassunk elemeket a Post modellből
    protected $table = 'posts'; // A tábla neve, amivel dolgozunk; ez tartalmazza a bejegyzéseket

    protected $fillable = ['title', 'creator', 'content'];

    public function user() {
        return $this->belongsTo(User::class); // Kapcsolat a User modellel; egy bejegyzésnek egy szerzője van
    }
}
