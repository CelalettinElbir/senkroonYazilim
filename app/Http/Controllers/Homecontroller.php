<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{

    public function index()
    {
        return view('home.index');
    }


    public function about()
    {
        return view('home.about');
    }


    public function contactUs()
    {
        return view('home.contact-us');
    }

    public function contactUsSubmit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:5000',
                'phone' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
            ]);

            Message::create($validated);

            return redirect()->route('contact-us')->with('success', 'Mesajınız başarıyla gönderildi!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('contact-us')->with('error', 'Bir hata oluştu: ' . $e->getMessage());
        }
    }
}
