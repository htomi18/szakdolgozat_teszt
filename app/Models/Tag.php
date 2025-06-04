<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function jobs(){
        return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id'); // Kapcsolat a Job modellel; egy címkének több munkája is lehet
    }
}
