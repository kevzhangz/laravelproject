<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home'
        ]);
    }

    function about()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Kevin',
            'img' => 'hhh.png',
            'active' => 'about'
        ]);
    }

    function categories()
    {
        return view('categories', [
            'title' => 'Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
