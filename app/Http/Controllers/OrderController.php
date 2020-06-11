<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Resume;
use App\Http\Resources\Order as OrderResources;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::orderBy('id','desc')->paginate(5);
        return OrderResources::collection($orders);
    }
    public function show($id){
        return new OrderResources(Order::find($id));
    }
    public function store(Request $request){
        // Models
        $order=new Order(['status'=>'Waiting']);
        $user=User::find($request->user_id);
        $resume=Resume::find($request->resume_id);
        $user->orders()->save($order);
        $order->save();
        //Relationships
        $order->resumes()->save($resume);
    }
    public function userOrders($id){
        $user=User::find($id);
        $userOrders=$user->orders;
        return OrderResources::collection($userOrders);
    }
}