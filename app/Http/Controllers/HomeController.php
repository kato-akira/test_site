<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $message = "データベースやPHPから渡されたメッセージです！";
        
        return view('index', [
            'message' => $message
        ]);
    }
}