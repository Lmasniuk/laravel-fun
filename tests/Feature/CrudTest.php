<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    // use RefreshDatabase;
    use DatabaseMigrations;

    public function testGetAllOrders()
    {
        $response = $this->get('/api/orders');

        var_dump($response->json());

        $response->assertStatus(200);
    }
}
