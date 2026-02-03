<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Post extends Model
{
    use HasApiTokens;
    protected $fillable = [
        'title','body'
    ];
}
