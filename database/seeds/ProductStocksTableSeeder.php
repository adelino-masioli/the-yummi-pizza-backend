<?php

use Illuminate\Database\Seeder;

use App\ProductStock;

class ProductStocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks =[
            ["product_id" => 1, "amount" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
            ["product_id" => 2, "amount" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
            ["product_id" => 3, "amount" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
            ["product_id" => 4, "amount" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
            ["product_id" => 5, "amount" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')],
            ["product_id" => 6, "amount" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]
            ];
        DB::table('product_stocks')->delete();
        ProductStock::insert($stocks);
    }
}
