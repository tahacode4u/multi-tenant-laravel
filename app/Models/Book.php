<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Book extends Model
{
    use BelongsToTenant;

    protected $table = "books";

    protected $fillable = [
        'title',
        'author',
        'image'
    ];
}
