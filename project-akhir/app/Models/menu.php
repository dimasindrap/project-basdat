<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Category;
use  App\Models\Transaction;

class Menu extends Model
{
    use HasFactory;
        
        protected $guarded = ['id'];

        public function categories()
        { 
            return $this->belongsToMany(Category::class); 
        }

        public function transaction(){
            return $this->hasOne(Transaction::class, 'menu_id');
        }
        
        

}
