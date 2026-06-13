<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechLogo extends Model
{
    protected $table = "tech_logos";

    protected $fillable = [
        "logo",
        "order",
        "status"
    ];
}
