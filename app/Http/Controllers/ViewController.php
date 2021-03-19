<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function index(){
        $order_title = "Test Title";

        $data = [
            'order_title' => 'Test Title',
            'order_status' => 'Pending',
            'order_content' => 'This is some content'
        ];

        return view('orders.orders')->with('data', $data);
    }

}
