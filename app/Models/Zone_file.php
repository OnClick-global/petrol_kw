<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone_file extends Model
{
    use HasFactory;

    public function getFileAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/zone_files') . '/' . $image;
        }else{
            return null ;
        }
//        return asset('uploads/default.jpg');
    }
}
