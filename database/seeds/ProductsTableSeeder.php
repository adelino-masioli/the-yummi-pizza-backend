<?php

use Illuminate\Database\Seeder;

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
                "id"        => 1,
                "title"     => "10' pizza, regular fries and Regular Drink",
                "price_eur" => 10.88,
                "price_dol" => 10.0,
                "image"     => "https =>//api.supermacs.ie//uploads/products/157/Meal%20A.png"
              ],
              [
                "id"        => 2,
                "title"     => "14' pizza, 3 regular fries & 3 drinks",
                "price_eur" => 14.14,
                "price_dol" => 13.0,
                "image"     => "https =>//api.supermacs.ie//uploads/products/156/Meal%20C.png"
              ],
              [
                "id"        => 3,
                "title"     => "Any 2 large pizza's. Choose from Classic, Finest or Create Your Own (up to 4 toppings)",
                "price_eur" => 16.32,
                "price_dol" => 15.0,
                "image"     => "https =>//api.supermacs.ie//uploads/products/228/double%20deal%201.png"
              ],
              [
                "id"        => 4,
                "title"     => "14' Pizza, 1.25 litre Drink, 3 Regular Fries, 8 Chicken Nuggets or Garlic Bread",
                "price_eur" => 19.58,
                "price_dol" => 18.0,
                "image"     => "https =>//api.supermacs.ie//uploads/products/163/Meal%20D.png"
              ],
              [
                "id"        => 5,
                "title"     => "14' Pizza and Chicken Piece Deal",
                "price_eur" => 21.76,
                "price_dol" => 20.0,
                "image"     => "https =>//api.supermacs.ie//uploads/products/138/14Inch%20Pizza%20&%20Chicken%20piece%20Deal.png"
              ],
              [
                "id"        => 6,
                "title"     => "14' Pizza, 2 Regular Fries OR 1 Wedges, 2 Regular Drinks and 4 Cookies.",
                "price_eur" => 23.93,
                "price_dol" => 22.0,
                "image"     => "https =>//api.supermacs.ie//uploads/products/586/Festive%20Feast%20Online%20Thumbnail.png"
              ]
        ]
    }
}
