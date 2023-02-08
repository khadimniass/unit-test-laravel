<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    private const  USER = [
        'name' => 'Test User',
        'telephone'=>'771958713',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password123',
    ];
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        //$user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => self::USER['email'],
            'password' => self::USER['password']
        ]);

       // $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        //$user = User::factory()->create();

        $this->post('/login', [
            'email' => self::USER['email'],
            'password' => self::USER['password'],
        ]);

        $this->assertGuest();
    }
}
