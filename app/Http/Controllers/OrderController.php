<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = [
            ['id' => 1, 'customer_id' => 1, 'status' => 'baru'],
            ['id' => 2, 'customer_id' => 2, 'status' => 'diproses'],
            ['id' => 3, 'customer_id' => 3, 'status' => 'dikirim'],
        ];

        return $orders;

        // return view('products.index', [
        //     'orders' => $orders]);
    }
}
