<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'background_image',
        'description_image',
        'icon',
        'order',
        'status'
    ];
}
