<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCats extends Model
{

    protected $table = 'blogs_cat';

    // below is no need because default
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    public function getAllBlogCats() {
        return self::all();
    }

    public function del($id) {
        return self::where('id', $id)->delete();
    }

    public function getBlogCatWithId($id) {
        return self::where('id', $id)->first();
    }
}
