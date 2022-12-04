<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\menu;

class category extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];

    public function category()
    { 
        return $this->hasMany(menu::class); 
    }
}
