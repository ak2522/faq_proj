<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUser()
    {
        $user =factory(\App\User:: class)->make();
        $this->assertTrue($user->save());
    }
    public function testQuestion()
    {
        $user =factory(\App\User:: class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }
    public function testAnswers()
    {
        $user =factory(\App\User:: class)->make();
        $this->assertTrue(is_object($user->answers()->get()));
    }
    public function testProfile()
    {
        $user =factory(\App\User:: class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }
}
