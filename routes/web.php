<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;


Route::get('',function (){
    return view('blogs',[
        'blogs' => Blog::with('category')->get()                                                    //with() is called eagar load 
    ]);
});


Route::get('blogs/{blog:filename}', function(Blog $blog){
    return view('blog',[
        'blog' =>  $blog
    ]);
})->where('blog','[A-z\d\-_]+');


Route::get('/categories/{category:filename}', function (Category $category){   
    return view('blogs',[
       'blogs' => $category->blogs
   ]);                                                                                                       //blogs function in category model
});




