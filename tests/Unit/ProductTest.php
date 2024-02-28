<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_product_store()
    {
        $response = $this->call('POST', '/gestion_product', [
            'name' => 'pc_Lapto',
            'title' => 'pc',
            'description' => 'gthbcyte djbqsklcjmq HHQSKJFKJD',
            'stock' => '10',
            'category' => 'pc_gamer_intel',
            'price' => '7000',
            'photo' => 'download (13).jfif'
        ]);

        dd($response);
        $response->assertStatus($response->status(), );



        // $this->assertTrue(true);
       
    }
}
