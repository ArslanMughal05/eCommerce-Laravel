<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
                'name'=> 'Apple',
                "price"=>"40000",
                "description"=>"Iphone 6s",
                "category"=>"mobile",
                "gallery"=>"https://fdn.gsmarena.com/imgroot//reviews/15/apple-iphone-6s/gal/-1024x768w1/gsmarena_001.jpg"
            ],
            [
                'name'=> 'Samsung',
                "price"=>"120000",
                "description"=>"Samsung Galaxy S22 Plus 5G",
                "category"=>"mobile",
                "gallery"=>"https://fdn.gsmarena.com/imgroot/reviews/22/samsung-galaxy-s22-handson/lifestyle/-1024w2/gsmarena_004.jpg"
            ],
            [
                'name'=> 'LED',
                "price"=>"38000",
                "description"=>"SAMSUNG 85-Inch Class Crystal 4K UHD AU8000 Series",
                "category"=>"TV",
                "gallery"=>"https://m.media-amazon.com/images/I/71LJJrKbezL._AC_SX355_.jpg"
            ],
            [
                'name'=> 'Dawlance',
                "price"=>"50000",
                "description"=>"9140WB Avante Pearl Red Refrigerator",
                "category"=>"Fridge",
                "gallery"=>"https://www.dawlance.com.pk/media/resize/F01000015000_LO1_20220817_110109.png/1000Wx1000H/image.png",
            ],
            

        
      ]);
    }
}

