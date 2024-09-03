<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

        Mail::send('email.coment', $data, function ($message) use ($data) {
            $message->to('eskulmanajemen@gmail.com') // Ganti dengan email Anda
                    ->subject('Pesan Baru dari ' . $data['name']);
        });

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}

