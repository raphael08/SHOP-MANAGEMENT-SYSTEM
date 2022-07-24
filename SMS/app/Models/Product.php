<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'quantity',
        'amount',
        'created_at',
        'updated_at',
    ];


    public function branch(){
        return $this->belongsTo(Branch::class);
       }
}
