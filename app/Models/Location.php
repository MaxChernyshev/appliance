<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Location extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'seo_title',
        'seo_description',
        'zip',
        'iframe',

        'content_1',
        'content_1_1',
        'image_1',

        'content_2',
        'content_2_1',
        'image_2',

        'content_3',
        'content_3_1',
        'image_3',

        'content_4',
        'content_4_1',
        'image_4',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
