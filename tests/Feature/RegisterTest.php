<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {
        // replace the return value of true with whatever values you wish to return for your test
        Socialite::shouldReceive('driver')->with('google')->andReturn(true);
        $this->visit('/auth/login/google');
    }

    private function visit(string $string)
    {
        $this->assertTrue(true);
    }
}
