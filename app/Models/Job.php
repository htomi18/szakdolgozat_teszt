<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{
    protected $table = 'job_listings'; // A tábla neve, amivel dolgozunk

    protected $fillable = ['title', 'salary']; // A mezők, amiket ki kell tölteni egy új elem létrehozásakor
}
