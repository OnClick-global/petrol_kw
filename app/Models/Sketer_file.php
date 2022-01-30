<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sketer_file extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function getFileAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/sketrs_files') . '/' . $image;
        }else{
            return "javascript:;" ;
        }
    }
}
