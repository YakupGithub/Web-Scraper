<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Models\DollarRate;

class ScraperController extends Controller
{
    public function scraper()
    {
        $client = new Client();
        $url = 'https://bigpara.hurriyet.com.tr/doviz/dolar/';
        $page = $client->request('GET', $url);

        $rate = $page->filter('.value')->text();

        DollarRate::query()->delete();

        DollarRate::create(['rate' => $rate]);

        $latestRate = DollarRate::latest()->first();

        if ($latestRate) {
            echo "Dolar Kuru 1$ = " . $latestRate->rate . " ₺";
        } else {
            echo "Dolar kuru bilgisi bulunamadı.";
        }
    }
}
