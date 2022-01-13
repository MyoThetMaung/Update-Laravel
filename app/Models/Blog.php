<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];                                                        //all are accepted
    protected $with = ['category','author'];                                        // will show category and author relationship ***

    public function scopeFilter($query,$filter){                                    //scopeFilter is formatted | two parameters - first is main query and second is optional parameters

        $query->when($filter['search']??false, function($query, $search){           //when accepts two paras | first is condition and second works if first para is true
            $query->where(function($query) use ($search){
                $query->where('body', 'LIKE', '%'.$search.'%')
                      ->orWhere('title','LIKE','%'.$search.'%');                    //search by title and body
            });
        });

        $query->when($filter['category']??false, function($query, $filename){
            $query->whereHas('category', function($query) use ($filename){
                $query->where('filename', $filename);
            });
        });

        $query->when($filter['username']??false, function($query, $username){
            $query->whereHas('author', function($query) use ($username){
                $query->where('username', $username);
            });
        });
    }

    public function category(){

        return $this->belongsTo(Category::class);                           //register here foreign key of category table
    }

    public function author(){

        return $this->belongsTo(User::class, 'user_id');
    }

}
