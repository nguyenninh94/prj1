<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post1 extends Model
{
    protected $fillable = ['title', 'content', 'view_acount'];
}
