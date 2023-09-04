<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $table = "pages";

    protected $fillable = [
        "title",
        "slug",
        "body",
        "status",
    ];

    protected function slug(): Attribute {
        return Attribute::make(
            set: fn ($value) => Str::of($value)->slug()
        );
    }
}
