<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'author', 'slug'];
    public const RELATIONSHIP_POST_CATEGORY = 'post_category';

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, self::RELATIONSHIP_POST_CATEGORY, 'post', 'category');
    }

}
