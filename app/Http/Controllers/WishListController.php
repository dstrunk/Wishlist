<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
        return view('wishlist.index', [
            'lists' => WishList::all(),
        ]);
    }

    public function show(WishList $list)
    {
        return view('wishlist.show', [
            'list' => $list,
        ]);
    }

    public function new()
    {
    }

    public function edit()
    {
    }

    public function save()
    {
    }

    public function destroy()
    {
    }
}
