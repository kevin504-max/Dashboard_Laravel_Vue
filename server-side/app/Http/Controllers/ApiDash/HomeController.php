<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = [
            [
                'id' => 1,
                'name' => 'Client 1',
                'email' => 'client1@gmail.com'
            ]
        ];

        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'price' => 1254.55
            ]
        ];

        return response()->json([
            'clients' => $clients,
            'products' => $products
        ]);
    }
}
