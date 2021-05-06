<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function image()
    {
        return $this->hasMany(Image::class);
    }
    public function getPricesAttribute()
    {
        $p = $this->price;
        return "$" . $p;
    }
    public function getExcerptAttribute() {
        return substr($this->description, 0, 280) . "...";
    }
}
