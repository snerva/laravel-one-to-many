<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'cover_image', 'description', 'type_id'];
    public static function generateSlug($title)
    {
        $project_slug = Str::slug($title);
        return $project_slug;
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
