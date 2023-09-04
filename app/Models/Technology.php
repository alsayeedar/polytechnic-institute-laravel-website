<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $table = "technologies";

    protected $fillable = [
        "name",
        "code",
        "logo",
        "description",
        "teachers",
        "course_structure",
        "class_routine",
        "color",
        "status",
    ];
}
