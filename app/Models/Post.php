<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value ?? 'default.jpg';
    }

    protected $fillable = [
        'title',
        'image',
        'content',
    ];

}
