<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\category;

class menu extends Model
{
    use HasFactory;
        
        protected $guarded = ['$id'];

        public function menu()
        { 
            return $this->belongsTo(category::class); 
        }
        
        

}
