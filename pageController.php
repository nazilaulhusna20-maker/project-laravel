<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 

class PageController extends Controller
{
    /**
     * Menampilkan view welcome.blade.php
     */
    public function welcome()
    {
        return view('welcome');
    }
    
     /**
     * Menampilkan view home.blade.php
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Menampilkan view about.blade.php
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Menampilkan view contact.blade.php
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Menampilkan view services.blade.php
     */
    public function services()
    {
        return view('services');
    }
}

