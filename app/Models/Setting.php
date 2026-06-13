<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'site_name',
        'location',
        'mobile',
        'email',
        'facebook_url',
        'x_url',
        'youtube_url',
        'linkdin_url',
        'short_description',
        'mobile_2',
        'mobile_3',
        'email_2',
        'email_3',
        'instagram_url',
        'office_time',
        'map_link',
        'logo',
        'favicon',
        'inverted_logo'
    ];
}
