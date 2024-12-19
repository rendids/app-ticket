<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FonnteeService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = 'https://api.fonnte.com/send';
        $this->apiKey = 'AjEXKNhYquJjt6bJdiGr';
    }

    public function sendWhatsAppMessage($phone, $message)
    {
        // Format nomor telepon sesuai dengan yang diminta API Fonntee (whatsapp: +62...)
        $target = 'whatsapp:' . $phone; 

        // Mengirim request POST ke Fonntee API
        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->post($this->apiUrl, [
            'target' => $target,
            'message' => $message,
            'countryCode' => '62', // Kode negara Indonesia
        ]);

        // Mengembalikan response dari Fonntee API
        return $response->json();
    }
}
