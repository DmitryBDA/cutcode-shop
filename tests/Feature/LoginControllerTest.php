<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
    * @test
    */
    public function it_user_can_login(): void
    {
        $password = 'flsdjflsdjflkfj';
        $user = User::factory()->create([
            'password' => $password,
        ]);

        $this->post(route('login', [
            'email' => $user->email,
            'password' => $password
        ]))->assertRedirect(route('index'));

        $this->assertAuthenticated();
    }

    /**
     * @test
     */
    public function it_user_can_not_login(): void
    {
        $password = 'flsdjflsdjflkfj';
        $user = User::factory()->create();

        $this->post(route('login', [
            'email' => $user->email,
            'password' => $password
        ]))->assertRedirect(route('login.mail'));

        $this->assertGuest();
    }
}
