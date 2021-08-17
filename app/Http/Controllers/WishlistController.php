<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WishlistController extends Controller
{
    public function index()
    {
        return Inertia::render('Wishlist/Index', [
            'lists' => Wishlist::all(),
        ]);
    }

    public function show(Wishlist $list)
    {
        return Inertia::render('Wishlist/Show', [
            'list' => $list->load('ideas'),
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
