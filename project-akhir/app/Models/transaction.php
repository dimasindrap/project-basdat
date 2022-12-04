<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];

    public function menu()
    { 
        return $this->hasOne(User::class); 
    }
    public function user()
    { 
        return $this->hasOne(User::class); 
    }

}
