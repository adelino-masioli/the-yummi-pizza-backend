<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
              [
                "title"       => "10' pizza",
                "description" => "10' pizza, regular fries and Regular Drink",
                "image"       => "pizza1.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' pizza",
                "description" => "14' pizza, 3 regular fries & 3 drinks",
                "image"       => "pizza2.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "Any 2 large pizza's",
                "description" => "Any 2 large pizza's. Choose from Classic, Finest or Create Your Own (up to 4 toppings)",
                "image"       => "pizza3.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' Pizza",
                "description" => "14' Pizza, 1.25 litre Drink, 3 Regular Fries, 8 Chicken Nuggets or Garlic Bread",
                "image"       => "pizza4.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' Pizza",
                "description" => "14' Pizza and Chicken Piece Deal",
                "image"       => "pizza5.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' Pizza",
                "description" => "14' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "image"       => "pizza6.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "15' Pizza",
                "description" => "15' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "image"       => "pizza7.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "16' Pizza",
                "description" => "16' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "image"       => "pizza8.jpg",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ]
              ];

              DB::table('products')->delete();
              Product::insert($products);
    }
}
