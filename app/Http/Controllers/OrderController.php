<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function ShowOrderForm() {
        return view('pages.ordering');
    }
    public function order(Request $request) {
        $data = $request->validate([
            "price" => ["required", "string"],
            "order" => ["required", "string"],
            "email" => ["required", "email"],
        ]);

        $order = Order::create([
            "price" =>$data["price"],
            "order" =>$data["order"],
            "email" =>$data["email"],
        ]);

        return redirect(route("home"));
    }
}
