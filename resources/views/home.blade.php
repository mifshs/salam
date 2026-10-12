<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="border-b bg-white">
        <div class="flex items-center py-5 mx-auto max-w-full justify-center">
            <a href="{{ route('array') }}" class="text-blue-700 hover:underline">Список товаров</a>
        </div>
    </header>

    <main class="flex max-w-full justify-content-center align-items-center min-h-[85vh]">
        <section class="flex items-center justify-center content-center w-screen bg-blue-200">
            <div class="flex justify-content-center align-items-center w-fit py-5 px-5 border-3 border-blue-300 bg-blue-400 rounded-3xl position-relative gap-35">
                <h1 class="text-xl justify-content-center items-center flex">Список товаров</h1>
                <img src="{{ asset('images/lake.webp') }}" alt="Горное озеро" class="h-100 rounded-3xl">
            </div>
        </section>
    </main>

    <footer class="border-t flex justify-center h-10">
        <div class="flex">
            &copy; {{ date('Y') }} Панарин Михаил
        </div>
    </footer>
</body>
</html>
