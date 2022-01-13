<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){

        return view('blogs',[

            'blogs' => Blog::latest()->filter(request(['search','category','username']))
                                     ->paginate(6)                                                  //filter function will be in BlogModel->scopeFilter()
                                     ->withQueryString()                                            //still maintain url bar request
        ]);
    }

    public function showBlog(Blog $blog){

        return view('blog',[
            'blog' =>  $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()                                   //take 3 random blogs
        ]);
    }

}
