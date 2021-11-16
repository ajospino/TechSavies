<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_password_is_required()
    {
        $this->get('/')->assertStatus(200);
        $user = User::where('email', 'lalzatem@gmail.com' );
        if ($user !== null){
            $user->delete();
        }
        $user = User::create(['email' => 'lalzatem@gmail.com',
                              'name' => 'laura',
                              'password' => 'laura',
                              'username' => 'laura',
                              'address' => 'laura',
        ]);
        $credentials = [
        "email" => "lalzatem@gmail.com",
        "password" => null
        ];
        $response = $this->from('/login')->post('/login', $credentials);
        $response->assertRedirect('/login')
        ->assertSessionHasErrors([
        'password' => 'The password field is required.',
        ]);
    }
}
