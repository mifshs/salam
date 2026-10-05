<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * @var list<array{id: int, title: string, price: int, path: string}>
     */
    public array $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'lake.webp'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'mountains.avif'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 1500, 'path' => 'lake.webp'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 1500, 'path' => 'lake.webp'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 1500, 'path' => 'lake.webp'],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 1500, 'path' => 'mountains.avif'],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 1500, 'path' => 'mountains.avif'],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 1500, 'path' => 'mountains.avif'],
    ];

    public function showIndex(): View
    {
        return view('home');
    }

    public function showArray(): View
    {
        return view('array', ['array' => $this->array]);
    }

    public function shuffleArray(): View
    {
        $array = $this->array;
        shuffle($array);

        return view('array', compact('array'));
    }

    public function sortArray(): View
    {
        $array = $this->array;
        usort($array, fn (array $first, array $second): int => $first['price'] <=> $second['price']);

        return view('array', compact('array'));
    }

    public function filterArray(): View
    {
        $array = array_values(array_filter(
            $this->array,
            fn (array $item): bool => $item['price'] > 1000,
        ));

        return view('array', compact('array'));
    }
}
