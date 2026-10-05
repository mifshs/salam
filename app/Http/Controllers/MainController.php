<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'priroda.avif'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'images.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 1500, 'path' => 'images.jpg'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 1500, 'path' => 'images.jpg'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 1500, 'path' => 'images.jpg'],
            ['id' => 6, 'title' => 'продукт 6', 'price' => 1500, 'path' => 'images.jpg'],
            ['id' => 7, 'title' => 'продукт 7', 'price' => 1500, 'path' => 'images.jpg'],
            ['id' => 8, 'title' => 'продукт 8', 'price' => 1500, 'path' => 'images.jpg'],

        ];

        return view('array', compact('array'));
    }
}
