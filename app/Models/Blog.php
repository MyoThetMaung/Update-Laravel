<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $guarded = [];                                         //all are accepted


    public function category(){

        return $this->belongsTo(Category::class);           //register here foreign key of category table
    }

    public function user(){
        
        return $this->belongsTo(User::class);
    }
}
