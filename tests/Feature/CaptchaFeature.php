<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CaptchaFeature extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCaptchaFeature()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testCaptcha()
    {
        $this->assertnotEmpty("I'm not a robot", " ");

    }
}

