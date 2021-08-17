<?php

namespace Tests\Feature;

use App\Models\Idea;
use App\Models\Wishlist;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WishlistControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_can_view_all_wishlists()
    {
        $wishlists = Wishlist::factory()->count(10)->create();
        $response = $this->get(route('wishlists.index'));

        $response->assertStatus(200);
        $wishlists->each(fn ($wishlist) => $response->assertSee($wishlist->name));
    }

    /** @test */
    public function users_can_view_a_single_wishlist_with_all_attached_ideas()
    {
        $wishlist = Wishlist::factory()->create();
        $ideas = Idea::factory()->count(6)->create([
            'wishlist_id' => $wishlist->id,
        ]);

        $response = $this->get(route('wishlists.show', ['list' => $wishlist->id]));

        $response->assertStatus(200);
        $ideas->each(fn ($idea) => $response->assertSee($idea->name));
    }
}
