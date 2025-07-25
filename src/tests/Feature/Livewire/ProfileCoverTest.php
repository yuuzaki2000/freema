<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ProfileCover;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;

class ProfileCoverTest extends TestCase
{
    /** @test */
    use DatabaseMigrations;

    public function test_change_profile(){
        $user = User::factory()->create();
        $this->actingAs($user);

        $profile = Profile::factory()->create([
            'user_id' => $user->id,
            'image' => 'storage/profile_img/hanako.png',
        ]);

        $data = [
            'user' => $user,
            'profile' => $profile,
        ];

        $response = $this->patch('/mypage/profile', $data);
    }
}
