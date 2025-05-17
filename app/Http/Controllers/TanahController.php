<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanahController extends Controller
{
    public function getData()
    {
        return [
            ['lokasi' => 'Jakarta Selatan', 'luas' => '200 m2', 'harga' => '1 Miliar'],
            ['lokasi' => 'Bandung', 'luas' => '150 m2', 'harga' => '750 Juta'],
            ['lokasi' => 'Surabaya', 'luas' => '300 m2', 'harga' => '1.5 Miliar'],
        ];
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('tanah_view', compact('data'));
    }
}
