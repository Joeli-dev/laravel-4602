<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){ 
        $products = [
            [
                'id' => 1,
                'nama' => 'Roma Kelapa',
                'stok' => '30',
                'deskripsi' => 'Roma Kelapa',
            ],
            [
                'id' => 2,
                'nama' => 'Roma Jagung',
                'stok' => '30',
                'deskripsi' => 'Roma Jagung',
            ],
            [
                'id' => 3,
                'nama' => 'Roma Kepala',
                'stok' => '30',
                'deskripsi' => 'Roma Kepala',
            ],
        ];

        return $products;
        //Return 
        // return view('products.index', [
        //     'products' => $products]);
    }
    //
}
