<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'title',
        'description',
        'image',
        'primary_btn_text',
        'primary_btn_link',
        'secondary_btn_text',
        'secondary_btn_link',
        'order',
        'status'
    ];
}
