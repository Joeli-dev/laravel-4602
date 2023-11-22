<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = app(ProductsController::class)->index();
        $orders = app(OrderController::class)->index();
        return view('dashboard', ['products' => $products, 'orders' => $orders]);
    }
    //
}
