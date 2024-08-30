<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function sendComment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ];

        Mail::send('emails.comment', $data, function ($message) use ($data) {
            $message->to('youremail@example.com') // Ganti dengan email Anda
                    ->subject('Komentar Baru dari ' . $data['name']);
        });

        return back()->with('success', 'Komentar Anda telah terkirim!');
    }
}

