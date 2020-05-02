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
                "image"       => "https://api.supermacs.ie//uploads/products/157/Meal%20A.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' pizza",
                "description" => "14' pizza, 3 regular fries & 3 drinks",
                "image"       => "https://api.supermacs.ie//uploads/products/156/Meal%20C.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "Any 2 large pizza's",
                "description" => "Any 2 large pizza's. Choose from Classic, Finest or Create Your Own (up to 4 toppings)",
                "image"       => "https://api.supermacs.ie//uploads/products/228/double%20deal%201.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' Pizza",
                "description" => "14' Pizza, 1.25 litre Drink, 3 Regular Fries, 8 Chicken Nuggets or Garlic Bread",
                "image"       => "https://api.supermacs.ie//uploads/products/163/Meal%20D.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' Pizza",
                "description" => "14' Pizza and Chicken Piece Deal",
                "image"       => "https://api.supermacs.ie//uploads/products/138/14Inch%20Pizza%20&%20Chicken%20piece%20Deal.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "14' Pizza",
                "description" => "14' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "image"       => "https://api.supermacs.ie//uploads/products/586/Festive%20Feast%20Online%20Thumbnail.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "15' Pizza",
                "description" => "15' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "image"       => "https://api.supermacs.ie//uploads/products/586/Festive%20Feast%20Online%20Thumbnail.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ],
              [
                "title"       => "16' Pizza",
                "description" => "16' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "image"       => "https://api.supermacs.ie//uploads/products/586/Festive%20Feast%20Online%20Thumbnail.png",
                "created_at"  => date('Y-m-d H:i:s'),
                "updated_at"  => date('Y-m-d H:i:s')
              ]
              ];

              DB::table('products')->delete();
              Product::insert($products);
    }
}
