<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use Faker\Factory as Faker;


class AuthControllerTest extends TestCase
{
    public function testRegister()
    {
        $faker = Faker::create();
    
        $userData = [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => 'password123', 
        ];
    
        $response = $this->postJson('/api/register', $userData);
    
        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'success',
                     'message' => 'User created successfully',
                     'authorisation' => [
                         'type' => 'bearer',
                     ],
                 ]);
    
        $this->assertDatabaseHas('users', ['email' => $userData['email']]);
    }
    public function testLogin()
    {
        $userData = [
            'email' => 'john@example.com',
            'password' => 'john123',
        ];

        $response = $this->postJson('/api/login', $userData);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'user',
                'authorisation' => [
                    'token',
                    'type',
                ],
            ]);
    }

    public function testLogout()
    {
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);
        $response = $this->withHeader('Authorization', 'Bearer ' . $token)
            ->postJson('/api/logout');

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'success',
                'message' => 'Successfully logged out',
            ]);
    }
}
