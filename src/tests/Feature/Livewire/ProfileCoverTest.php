<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ProfileCover;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileCoverTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ProfileCover::class);

        $component->assertStatus(200);
    }
}
