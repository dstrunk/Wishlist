<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ideaList()
    {
        return $this->belongsTo(WishList::class);
    }

    public function priceInDollars()
    {
        return number_format(((float) $this->price / 100), 2, '.', '');
    }
}