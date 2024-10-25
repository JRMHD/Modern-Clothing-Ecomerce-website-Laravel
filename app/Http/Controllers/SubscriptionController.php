<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouForSubscribing;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email
        $validatedData = $request->validate([
            'subsEmail' => 'required|email|unique:subscriptions,email',
        ]);

        // Store subscription in the database
        $subscription = Subscription::create([
            'email' => $validatedData['subsEmail'],
        ]);

        // Send thank-you email to the user
        Mail::to($subscription->email)->send(new ThankYouForSubscribing());

        // Return JSON response for AJAX success
        return response()->json(['success' => 'Thank you for subscribing!']);
    }
}
