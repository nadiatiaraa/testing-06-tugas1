<?php

namespace Tests\Unit;

use Tests\TestCase;
class MyVisitTest extends TestCase
{
    public function test_myvisit_app()
    {
        $response = $this->get('/user/myvisit');
        $response -> assertStatus(302);
    }
}