<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureRegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testRecaptcha()
    {
        $this->assertnotEmpty("I'm not a robot", " ");

    }
}
