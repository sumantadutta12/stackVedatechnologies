<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enquiry extends Model
{
    protected $table = 'enquiries';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_id',
        'message',
        'status'
    ];


    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
