<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }
}
