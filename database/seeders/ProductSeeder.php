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
        DB::table('products')->insert([
            [
                'name'=>'LG Q7',
                'price'=>'250 $',
                'category'=>'mobile',
                'description'=>'LG Q7 smartphone was launched in May 2018.',
                'gallery'=>'https://www.gadgetdiary.com/wp-content/uploads/2018/06/LG-Q7-1-1024x809.jpg'
            ],
            [
                'name'=>'Samsung TV',
                'price'=>'350 $',
                'category'=>'tv',
                'description'=>'The best Samsung TV in the budget category that we have tested is the Samsung TU8000.',  
                'gallery'=>'https://static.tehnomanija.rs/UserFiles/products/132899_(1).jpg'
            ],
            [
                'name'=>'Double Door Refrigerator',
                'price'=>'200 $',
                'category'=>'refrigerator',
                'description'=>'Auto defrost function to prevent ice-build up.',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51B%2BPLv%2BsvL._SL1500_.jpg'
            ],
            [
                'name'=>'iPhone 12',
                'price'=>'1050 $',
                'category'=>'mobile',
                'description'=>'Of the four members of the new iPhone 12 family, the base iPhone 12 might be easy to overlook.',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfadvLnq4oA-Iyc4Mx-D8Jn1UBpP_TUTMoYg&usqp=CAU'
            ],
            [
                'name'=>'LG 594 L Inverter Frost-Free Side-By-Side Refrigerator',
                'price'=>'950 $',
                'category'=>'refrigerator',
                'description'=>'LG’s Inverter Linear Compressor is also backed. you can enjoy better organization and smarter storage.',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51hvljNyn%2BL._SL1500_.jpg'
            ]
        ]);
    }
}
