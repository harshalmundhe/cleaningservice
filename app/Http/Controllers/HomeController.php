<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function about() {
        return view('frontend.about');
    }
    public function blog() {
        return view('frontend.blog');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function estimate() {
        return view('frontend.estimate');
    }
}
