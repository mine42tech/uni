<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;



class Post extends Model
{
    use SoftDeletes, Sluggable;

    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'content',
        'published_at',
        'active'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
