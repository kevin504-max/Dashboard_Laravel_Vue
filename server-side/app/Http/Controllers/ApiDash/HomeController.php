<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();

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
