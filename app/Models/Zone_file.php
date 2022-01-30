<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone_file extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getFileAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/zone_files') . '/' . $image;
        }else{
            return "javascript:;" ;
        }
    }
    public function Childs()
    {
        return $this->hasMany('App\Models\Zone_file','parent_id');
    }
}
