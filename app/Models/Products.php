<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // The name of the table associated with the model
    protected $table = 'products'; 
    // The attributes that are mass assignable
    protected $fillable = ['name', 'price', 'description', 'stock'];
    // If your table doesn't have `created_at` and `updated_at` timestamps
      public $timestamps = true;
      // If your table uses a custom primary key
      protected $primaryKey = 'id';
}
