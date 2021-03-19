<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function getAllOrders(){
        $orders = Order::all();
        return response()->json($orders);
    }

    public function getOrderById($id){
        $order = Order::find($id);
        if(is_null($order)){
            return response()->json(['message'=>'Order not found'],404);
        } 
        return response()->json($order::find($id),200);
    }

    public function createOrder(Request $request){

        $order = new Order;
        $order->order_title=$request->order_title;
        $order->order_content=$request->order_content;
        $order->order_status=$request->order_status;
        $result = $order->save();
        if( $result == true){
            return ['Result' => 'Data has been saved'];
        } else {
            return ['Result' => 'Data has not been saved'];
        }
    }

    public function updateOrderById($id, Request $request){

        $order = Order::find($id);
        if(is_null($order)){
            return response()->json(['message'=>'Order not found'],404);
        } 

        $order->order_title=$request->order_title;
        $order->order_content=$request->order_content;
        $order->order_status=$request->order_status;
        $result = $order->save();

        return response()->json($order::find($id),200);
    }

    public function deleteOrder($id){

        $order = Order::find($id);


        if(is_null($order)){
            return response()->json(['message'=>'Order not found'],404);
        } 

        $order->delete();

        return response()->json(['message'=>'Order Id ' . $id . ' has been deleted'],200);
    }
}

