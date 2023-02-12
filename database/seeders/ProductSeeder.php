<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Margarrita',
                "price"=>"700",
                "description"=>"Pizza Margarita",
                "category"=>"pizza",
                "gallery"=>"https://imageproxy.wolt.com/menu/menu-images/61373ac33bd05b352586eb4c/c1e405a6-0fc4-11ec-b410-12c6ade96e96_001_pica_margarita.jpeg?w=600"
            ],
            [
                'name'=>'Capricossa',
                "price"=>"800",
                "description"=>"Pizza Capricossa",
                "category"=>"pizza",
                "gallery"=>"https://imageproxy.wolt.com/menu/menu-images/61373ac33bd05b352586eb4c/b38d8878-0fc5-11ec-97be-4e5d46ca0c51_012_pizza_kapricioza.jpeg?w=600"
            ],
            [
                'name'=>'Vegeteriana',
                "price"=>"900",
                "description"=>"Pizza Vegeteriana",
                "category"=>"pizza",
                "gallery"=>"https://imageproxy.wolt.com/menu/menu-images/61373ac33bd05b352586eb4c/dca40c32-7a91-11ec-b408-5a63dfa2e2af_pizza_vegetarijana_copy.jpeg?w=600"
            ],
            [
                'name'=>'Mexicana',
                "price"=>"1000",
                "description"=>"Pizza Mexicana",
                "category"=>"pizza",
                "gallery"=>"https://imageproxy.wolt.com/menu/menu-images/61373ac33bd05b352586eb4c/e89ed13e-0fc5-11ec-8d25-caeee2c0654b_015_pizza_mexicana.jpeg?w=600"
             ]
        ]);
    }
}