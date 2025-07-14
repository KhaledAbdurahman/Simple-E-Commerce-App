<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();

        Contact::create($data);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
