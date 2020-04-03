<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Product::create(
            [
                'name' => 'Pillow_1',
                'price' => '15$',
                'image' => 'product/product_list_1.png',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_2',
                'price' => '23$',
                'image' => 'product/product_list_2.png',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Pillow_3',
                'price' => '30$',
                'image' => 'product/product_list_3.png',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_4',
                'price' => '18$',
                'image' => 'product/product_list_4.png',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_5',
                'price' => '25$',
                'image' => 'product/product_list_5.png',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Pillow_6',
                'price' => '22$',
                'image' => 'product/product_list_6.png',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Pillow_7',
                'price' => '20$',
                'image' => 'product/product_list_7.png',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_8',
                'price' => '19$',
                'image' => 'product/product_list_8.png',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_9',
                'price' => '11$',
                'image' => 'product/product_list_9.png',
                'top9' => 1,
            ]
        );      
        Product::create(
            [
                'name' => 'Pillow_10',
                'price' => '12$',
                'image' => 'product/single_product_1.png',
                'top9' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_11',
                'price' => '15$',
                'image' => 'product/single_product_2.png',
                'top9' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'Pillow_12',
                'price' => '18$',
                'image' => 'product/single_product_3.png',
                'top9' => 0,
            ]
        );                                            
    }
}
