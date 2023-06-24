<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_login_app()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
