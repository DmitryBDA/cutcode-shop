<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
    * @test
    */
    public function it_login_page_success_status(): void
    {
        $response = $this->get(route('login'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function it_login_email_page_success_status(): void
    {
        $response = $this->get(route('login.mail'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function it_register_page_success_status(): void
    {
        $response = $this->get(route('register'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function it_register_email_page_success_status(): void
    {
        $response = $this->get(route('register.mail'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function it_forgot_page_success_status(): void
    {
        $response = $this->get(route('forgot'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function it_forgot_success_page_status_ok(): void
    {
        $response = $this->get(route('forgotsuccess'));

        $response->assertOk();
    }

    /**
     * @test
     */
    public function it_can_a_user_logout(): void
    {
        $user = User::factory()->make();
        $this->be($user); // login your user in system

        $this->get(route('logout'))
            ->assertRedirect(route('index')); // redirect to login,
        $this->assertGuest(); // check that your user not auth more
    }

    /**
     * @test
     */
    public function it_set_user_new_password_forgot(): void
    {
        $password = 'flsdjflsdjflkfj';
        $user = User::factory()->create([
            'password' => $password,
        ]);

        $this->post(route('forgot.process', [
            'email' => $user->email,
        ]))->assertRedirect(route('forgotsuccess'));

        $tryAuthenticated = Auth::attempt([
            'email' => $user->email,
            'password' => $password
        ]);

        $this->assertFalse($tryAuthenticated);
    }
}
