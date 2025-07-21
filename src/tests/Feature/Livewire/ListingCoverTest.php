<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ListingCover;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\User;

class ListingCoverTest extends TestCase
{
    /** @test */

    use RefreshDatabase;

    public function test_the_component_can_render(){

        $component = Livewire::test(ListingCover::class);

        $component->assertStatus(200);

    }

    public function test_login_user_can_see_the_cover(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->get('/sell')->assertSeeLivewire('listing-cover');
        

    }
}
