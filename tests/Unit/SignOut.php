<?php
namespace Tests\Unit;

use Tests\TestCase;
class SignoutTest extends TestCase
{
    public function test_signout_app()
    {
        $response = $this->get('/signout');
        $response -> assertStatus(302);
    }
}