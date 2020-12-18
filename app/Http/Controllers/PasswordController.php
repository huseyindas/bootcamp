<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function forgot()
    {
        return view('login.forgot-password');
    }

    public function send(Request $request) {
        $phone = $request->get('phone');
        $yeniSifre = Str::random(8);
        $hash = Hash::make($yeniSifre);

        if (User::where('phone', '=', $phone)->count() > 0) {
            User::where('phone', $phone)->update(['password' => $hash]);

            $basic  = new \Nexmo\Client\Credentials\Basic('f30037c0', 'MPjo1IjS2F1CW66h');
            $client = new \Nexmo\Client($basic);

            $message = $client->message()->send([
                'to' => $phone,
                'from' => 'Veritabanı',
                'text' => 'Yeni şifreniz: ' . $yeniSifre . ' bu şifreyi sisteme girdikten sonra lütfen değiştirin'
            ]);

            if ($message->getStatus() == 0) {
                echo "Mesaj başarıyla gönderildi.";
            } else {
                echo "Mesaj gönderilemedi: " . $message->getStatus() . "";
            }

        }

        else {
            echo 'Sistemde kayıtlı böyle bir telefon numarası yok!';
        }
    }
}
