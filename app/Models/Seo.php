<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seos';
    protected $fillable = [
        'page',
        'title',
        'description',
        'keywords',
        'canonical',
        'og_title',
        'og_description',
        'og_image',
        'status'
    ];
}
