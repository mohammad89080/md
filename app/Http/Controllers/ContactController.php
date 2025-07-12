<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact_us.index');
    }
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email',
            'phone'   => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('you@example.com')->send(new ContactFormMail($data));

        return back()->with('success', 'Your message has been sent!');
    }
}
