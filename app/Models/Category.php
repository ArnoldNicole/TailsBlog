<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'color',
        'headline',
        'sub_headline',
        'tagline',
        'image',
    ];


    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
