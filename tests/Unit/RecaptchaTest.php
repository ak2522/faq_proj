<?php

namespace ReCaptcha;

use PHPUnit\Framework\TestCase;


use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecaptchaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function RecaptchaTest($invalid)
    {
        $captcha = new ReCaptcha($invalid);

    }

    public function testVerifyReturnsErrorOnMissingResponse()
    {
        $captcha = new ReCaptcha('secret');
        $validate = $captcha->verify('');
        $this->assertFalse($validate->isSuccess());
        $this->assertEquals(array(Recaptcha::E_MISSING_INPUT_RESPONSE), $validate->getErrorCodes());

    }
}
