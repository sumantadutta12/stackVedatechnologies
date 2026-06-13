<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait SlugTrait
{
    public function serviceSlug(string $name): string
    {
        $slug = Str::slug($name);
        $preparedSlug = $slug;
        $count = 1;

        while (DB::table('services')->whereRaw('slug = ?', $preparedSlug)->exists()) {
            $preparedSlug = $slug.'-'.$count;
            $count++;
        }

        return $preparedSlug;
    }
}
