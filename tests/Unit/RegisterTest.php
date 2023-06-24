<?php

namespace Tests\Unit;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_register()
    {
        $response = $this->get('/registration');

        $response->assertStatus(200);
    }
}
