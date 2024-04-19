<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Handle form submission here, e.g., send email

        return redirect()->back()->with('success', 'Your message has been sent. We will get back to you soon.');
    }
}
