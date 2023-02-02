<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.OrderForm');
    }
    public function storeOrder()
    {
        return view('orders.receipt');
    }
}
