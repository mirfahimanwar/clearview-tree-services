<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:30'],
            'service' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        Contact::create($validated);

        return redirect()->route('home')->with('success', true)->withFragment('contact');
    }
}
