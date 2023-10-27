<?php

namespace App\Models;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    protected $fillable = ['title', 'synopsis', 'year', 'cover'];
}
