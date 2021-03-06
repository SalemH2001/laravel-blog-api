<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable=['name','slug'];
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
