<?php

namespace App\Controllers;

class HelpController extends BaseController
{
    public function index()
    {
        // Pastikan nama view ini sesuai dengan yang akan kita buat
        return view('bantuan'); 
    }

    public function lapor()
    {
        return view('lapor'); // Nama file view laporan masalah kamu
    }
}