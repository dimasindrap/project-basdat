<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Menu;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function menu()
    { 
        return $this->belongsTo(Menu::class, 'menu_id'); 
    }
    public function users()
    { 
        return $this->hasOne(User::class); 
    }

}
