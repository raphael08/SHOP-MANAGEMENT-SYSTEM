<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'created_at',
        'updated_at',
    ];


    public function product(){


     return $this->hasMany(Product::class);
    }

}
