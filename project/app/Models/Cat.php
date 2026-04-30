<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $guarded = [];

    protected $appends = ['needs_no_referrer'];
    
    public function getNeedsNoReferrerAttribute(): bool
    {
        return str_contains($this->url ?? '', 'imgur.com');
    }
}
