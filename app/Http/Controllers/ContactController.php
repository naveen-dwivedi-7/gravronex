<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Store to DB
            $contact = Contact::create($validated);

            // Send mail
            Mail::to('info@gravronex.com')->send(new ContactMessage($validated));

            return back()->with('success', 'Thank you! Your message has been sent and saved.');
            
        } catch (\Exception $e) {
            Log::error('Email sending failed: '.$e->getMessage());
            return back()->with('error', 'Message saved but email failed: '.$e->getMessage());
        }
    }
}