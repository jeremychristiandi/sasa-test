<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function product() {
        return $this->hasMany(Product::class);
    }
    public function stock() {
        return $this->hasMany(Stock::class);
    }
}