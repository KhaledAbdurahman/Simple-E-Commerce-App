<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        //validate the request
        $data = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        //create a new subscriber
        Subscriber::create($data);

        return back()->with('status', 'Thank you for subscribing to our Discount Offers!');
    }
}
