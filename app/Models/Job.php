<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Használjuk a HasFactory trait-et, hogy gyárthassunk elemeket a Job modellből

class Job extends Model{

    use HasFactory; // Használjuk a HasFactory trait-et, hogy gyárthassunk elemeket a Job modellből
    protected $table = 'job_listings'; // A tábla neve, amivel dolgozunk; ez tartalmazza a munkákat

    protected $fillable = ['title', 'salary']; // A mezők, amiket ki kell tölteni egy új elem létrehozásakor

    public function employer() {
        return $this->belongsTo(Employer::class); // Kapcsolat az Employer modellel; egy munkának egy munkáltatója van
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id"); // Kapcsolat a Tag modellel; egy munkának több címkéje is lehet
    }
}
