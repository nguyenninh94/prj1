<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'content'];

    public function getAllPost2()
    {
    	return static::all();
    }

    public function findPost2ByColumn($att, $column)
    {
    	return static::where($att, $column)->get();
    }

    public function deletePost2($id)
    {
    	return static::find($id)->delete();
    }

}
