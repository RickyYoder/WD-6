<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
			"imagePath"=>"https://ae01.alicdn.com/kf/HTB1PNwhNVXXXXXdXFXXq6xXFXXXn/10pcs-lot-Capacitive-Touch-Screen-Stylus-Pen-For-IPad-Air-Mini-2-3-4-For-IPhone.jpg_640x640.jpg",
			"title"=>"Micro USB Female to USB C Male Adapter, White",
			"description"=>"Convert a micro USB connector to the new USB C connector without having to buy a new cable. White colored.",
			"price"=>3
		]);
		
		$product->save();
		
		$product = new \App\Product([
			"imagePath"=>"https://ae01.alicdn.com/kf/HTB1Qgy.SXXXXXbxXXXXq6xXFXXXR/50PCS-LOT-USB-3-1-Type-C-Male-to-Micro-USB-Female-Adapter-Converter-Connector-USB.jpg_640x640.jpg",
			"title"=>"10 Pack of Rainbow Colored Styluses",
			"description"=>"Up to 10 different colors of styluses for your touch-enabled devices.",
			"price"=>6
		]);
		
		$product->save();
		
		$product = new \App\Product([
			"imagePath"=>"https://ae01.alicdn.com/kf/HTB1Ne8QmfNNTKJjSspeq6ySwpXa4/2017-New-USB-3-1Type-C-USB-Cable-Retractable-Cable-Data-Sync-Charging-Cable-Cord-For.jpg_640x640.jpg",
			"title"=>"Retractable USB C Charge/Sync Cable, Black 3ft",
			"description"=>"Get rid of tangled cables with retractable ones. This black USB charge/sync cable is both useful and convenient!",
			"price"=>11
		]);
		
		$product->save();
    }
}
