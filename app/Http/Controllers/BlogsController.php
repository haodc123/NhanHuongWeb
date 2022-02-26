<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\BlogCats;
use App\Enums\ResStatus;
use Illuminate\Http\Request;

class BlogsController extends Controller
{

    private $blogs;

    public function index() {

        $this->blogs = new Blogs();
        $bloglist = $this->blogs->getAllBlogs();

        return view('blogs.blogs', [
            'bloglist' => $bloglist
        ]);
    }

    public function show(Request $request) {

        $title = $request->title;
        $this->blogs = new Blogs();
        $blog = $this->blogs->getBlogWithTitle($title);

        return view('blogs.detail', [
            'blog' => $blog
        ]);
    }

    public function edt_get_blogcats() {
        $blogcats = new BlogCats();
        return response()->json([
            'data' => $blogcats->getAllBlogCats(), 
            'status' => ResStatus::Success
        ]);
    }

    public function edt_del_blogcats(Request $request) {
        $blogcats = new BlogCats();
        //$status = $blogcats->del($request->id);

        return response()->json([
            'status' => 1
        ]);
    }
    
}
