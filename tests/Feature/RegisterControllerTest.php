<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
    * @test
    */
    public function it_register_success(): void
    {
        $password = 'flsdjflsdjflkfj';
        $user = User::factory()->make();

        $this->post(route('register', [
            'email' => $user->email,
            'password' => $password,
            'password_confirmation' => $password,
            'name' => $user->name
        ]))->assertRedirect(route('index'));

        $this->assertDatabaseHas('users', [
            'email' => $user->email,
            'name' => $user->name
        ]);

        $this->assertAuthenticated();
    }
}
