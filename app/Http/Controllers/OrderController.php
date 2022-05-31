<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function putOrder(Request $request) {
        $data = $request->validate([
            "chosenProducts" => ["required", "string"],
            "price" => ["required", "float"],
        ]);

        $order = Order::create([
            "chosenProducts" => $data["chosenProducts"],
            "price" => $data["price"],
        ]);

        return redirect(route("home"));
    }
}
