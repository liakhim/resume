<?php

// app/Http/Controllers/SpaController.php
namespace App\Http\Controllers;

class SpaController extends Controller
{
    public function index()
    {
        return view('spa'); // Всегда возвращаем SPA-шаблон
    }
}
