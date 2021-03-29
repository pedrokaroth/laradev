<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    protected $fillable = ['address', 'number', 'complement', 'zipcode', 'city', 'state'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}


