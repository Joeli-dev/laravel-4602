<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{

    public function index(){ 
        $shippings = [
            [
                'id' => 1,
                'name' => 'Jasa Ekspedisi A',
                'address' => 'Jl. Jendral Sudirman No. 10, Jakarta Pusat',
                'phone_number' => '021-12345678',
            ],
            [
                'id' => 2,
                'name' => 'Jasa Ekspedisi B',
                'address' => 'Jl. Gatot Subroto No. 20, Jakarta Selatan',
                'phone_number' => '021-23456789',
            ],
            [
                'id' => 3,
                'name' => 'Jasa Ekspedisi C',
                'address' => 'Jl. MH Thamrin No. 30, Jakarta Pusat',
                'phone_number' => '021-34567890',
            ],
        ];

        //Return 
        return view('shipping.index', [
            'shippings' => $shippings]);
    }
    //
}
