<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Orders;
use App\Models\Order_items;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function index()
    {
        //get order
        $orders = OrderItems::latest()->paginate(5);

        //render view with orders
        return view('orderitems.index', compact('orders'));
    }
}
