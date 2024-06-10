<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Project;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'thumbnail'];
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    public static function generateSlug($title){
        return Str::slug($title, '-');
    }
}
