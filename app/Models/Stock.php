<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function jenis() {
        return $this->belongsTo(Jenis::class);
    }
    public function location() {
        return $this->belongsTo(Location::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
}