<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'history', 'brand_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
