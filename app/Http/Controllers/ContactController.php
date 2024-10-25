<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'conName' => 'required|string|max:255',
            'conEmail' => 'required|email|max:255',
            'conPhone' => 'required|string|max:15',
            'conSubject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save contact in the database
        $contact = Contact::create([
            'name' => $validatedData['conName'],
            'email' => $validatedData['conEmail'],
            'phone' => $validatedData['conPhone'],
            'subject' => $validatedData['conSubject'],
            'message' => $validatedData['message'],
        ]);

        // Send the email using the new Blade view
        Mail::send('emails.contact_notification', ['contact' => $contact], function ($message) use ($contact) {
            $message->to('cgreen@hacksolutionsusa.com')
                ->subject('New Contact Form Submission');
        });

        return response()->json(['success' => 'Form submitted successfully']);
    }
}
