<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductTest extends TestCase
{
    use DatabaseMigrations;

    public function testCreateProduct()
    {
        $product = factory(\App\Product::class)->create();
        $this->assertTrue(true);
    }

    public function testGetAllProducts()
    {
        $response = $this->json('GET', '/api/products');
        $response->assertStatus(200);
    }

}
