<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function index(){


        // $order = Order::find(1);
        $orders = Order::all();


        // $data = [
        //     'order_title' => 'Test Title',
        //     'order_status' => 'Pending',
        //     'order_content' => 'This is some content'
        // ];


        return view('orders.orders')->with('orders', $orders);
    }

}
