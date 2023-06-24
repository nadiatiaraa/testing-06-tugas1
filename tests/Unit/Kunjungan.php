<?php
namespace Tests\Unit;

use Tests\TestCase;
class HomeTest extends TestCase
{
    public function test_home_list_kunjungan()
    {
        $response = $this->get('/user/kunjungans');
        $response -> assertStatus(302);
    }
}           