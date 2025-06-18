<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    protected string $model = Product::class;

    public function test_can_get_product_list(): void
    {
        $this->model::factory(10)->create();

        $response = $this->get('/api/products');

        $response->assertStatus(200);
        $response->assertJsonPath('meta.total', 10);
    }
}
