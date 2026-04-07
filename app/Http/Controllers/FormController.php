<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    // Form show
    public function index()
    {
        return view('form');
    }

    // Form submit + save
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'user_location' => 'required',
            'event_location' => 'required',
            'event_duration' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_location' => $request->user_location,
            'event_location' => $request->event_location,
            'event_duration' => $request->event_duration,
            'message' => $request->message,
        ]);

        return redirect('/form')->with('success', 'Form Submitted Successfully!');
    }
}