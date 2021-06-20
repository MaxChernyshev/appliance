<?php

namespace App\Models;

use App\Traits\ModelFolder;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use Sluggable;
    use ModelFolder;

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
