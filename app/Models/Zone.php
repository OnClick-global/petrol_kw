<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function ZoneFiles()
    {
        return $this->hasMany('App\Models\Zone_file','zone_id');
    }    
}
