<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function send_messagee(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'pesan' => $validated['message'],
        ];

        Mail::send('email.contact', $data, function ($mail) use ($data) {
            $mail->to('eskulmanajemen@gmail.com') // Ganti dengan email Anda
                    ->subject('Pesan Baru dari ' . $data['name']);
        });

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}


