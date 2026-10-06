<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-gray-100 text-gray-800">
    <header class="border-b bg-white">
        <div class="mx-auto flex max-w-4xl items-center justify-between px-4 py-4">
            <a href="{{ route('home') }}" class="text-lg font-bold">Панарин Михаил</a>
            <a href="{{ route('array') }}" class="text-blue-700 hover:underline">Список товаров</a>
        </div>
    </header>

    <main class="mx-auto flex w-full max-w-4xl flex-1 items-center px-4 py-10">
        <section class="grid items-center gap-6 rounded-lg border bg-white p-6">
            <div>
                <h1 class="text-2xl font-bold">Привет! Это мой сайт</h1>
                <p class="mt-3 leading-7">
                    Здесь вы можете ознакомиться с моими товарами и услугами. Я стараюсь предоставлять качественные продукты и отличный сервис для всех моих клиентов.
                </p>
                <a href="{{ route('array') }}" class="mt-5 inline-block rounded bg-blue-700 px-4 py-2 text-white hover:bg-blue-800">
                    Посмотреть товары
                </a>
            </div>
            <img src="{{ asset('images/lake.webp') }}" alt="Горное озеро" class="h-40 w-full rounded object-cover">
        </section>
    </main>

    <footer class="border-t bg-white">
        <div class="mx-auto max-w-4xl px-4 py-4 text-sm text-gray-600">
            &copy; {{ date('Y') }} Панарин Михаил
        </div>
    </footer>
</body>
</html>
