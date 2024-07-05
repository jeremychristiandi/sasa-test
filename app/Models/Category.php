<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function jenis() {
        return $this->hasMany(Jenis::class);
    }
    public function product() {
        return $this->hasMany(Product::class);
    }
    public function stock() {
        return $this->hasMany(Stock::class);
    }
}