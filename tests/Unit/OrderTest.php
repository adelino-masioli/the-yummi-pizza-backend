<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderTest extends TestCase
{
    use DatabaseMigrations;

    public function testCreateOrder()
    {
        $order = factory(\App\Order::class)->create();
        $this->assertTrue(true);
    }

    public function testGetAllOrdersUnauthorized()
    {
        $response = $this->json('GET', '/api/orders');
        $response->assertStatus(401);
    }

}
