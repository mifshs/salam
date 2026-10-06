<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col bg-gray-100 text-gray-800">
    <header class="border-b bg-white">
        <div class="mx-auto flex items-center justify-between px-4 py-4">
            <a href="{{ route('home') }}" class="text-lg font-bold">Панарин Михаил</a>
            <a href="{{ route('home') }}" class="text-blue-700 hover:underline">На главную</a>
        </div>
    </header>

    <main class="mx-auto w-full flex-1 px-4 py-8">
        <section class="rounded-lg border bg-white p-5">
            <h1 class="text-2xl font-bold">Список товаров</h1>
            <p class="mt-2 text-gray-600">Можно перемешать, отсортировать или отфильтровать список.</p>

            <nav aria-label="Действия с массивом" class="mt-5 flex flex-wrap gap-3">
                <a href="{{ route('array.shuffle') }}" class="rounded border border-gray-300 px-3 py-2 text-sm hover:bg-gray-100">
                    Перемешать массив
                </a>
                <a href="{{ route('array.sort') }}" class="rounded border border-gray-300 px-3 py-2 text-sm hover:bg-gray-100">
                    Сортировать массив (по цене по возрастанию)
                </a>
                <a href="{{ route('array.filter') }}" class="rounded border border-gray-300 px-3 py-2 text-sm hover:bg-gray-100">
                    Отфильтровать массив (оставить только товары, у которых цена больше 1000)
                </a>
                <a href="{{ route('array.filter1') }}" class="rounded border border-gray-300 px-3 py-2 text-sm hover:bg-gray-100">
                    Отфильтровать массив (оставить только товары, у которых цена больше 2000 и меньше 6000)
                </a>
            </nav>
        </section>

        <div class="mt-6 grid grid-cols-1 gap-4">
            @foreach($array as $item)
                <article class="flex gap-4 rounded-lg border bg-white p-4">
                    <img src="{{ asset('images/' . $item['path']) }}" alt="{{ $item['title'] }}" class="h-24 w-28 rounded object-cover">
                    <div>
                        <p class="text-sm text-gray-500">ID: {{ $item['id'] }}</p>
                        <h2 class="mt-1 font-semibold">{{ $item['title'] }}</h2>
                        <p class="mt-2 text-blue-700">{{ $item['price'] }} &#8381;</p>
                    </div>
                </article>
            @endforeach
        </div>
    </main>

    <footer class="border-t bg-white">
        <div class="mx-auto px-4 py-4 text-sm text-gray-600">
            &copy; {{ date('Y') }} Панарин Михаил
        </div>
    </footer>
</body>
</html>
