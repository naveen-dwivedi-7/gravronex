<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Store to DB
        $contact = Contact::create($validated);

        // Send mail using data just stored
        Mail::to('dwivedinaveen34@gmail.com')->send(new ContactMessage($validated));

        return back()->with('success', 'Thank you! Your message has been sent and saved.');
    }
}
