<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use SoftDeletes;

    protected $table = 'blogs';

    // below is no need because default
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    public function getAllBlogs() {
        return self::all();
    }

    public function getSomeBlogs($n) {
        return self::orderBy('id', 'desc')->take($n)->get();
    }

    public function getBlogWithTitle($title) {
        return self::where('blog_title_slug', $title)->first();
    }
}
