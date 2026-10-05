<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Главная страница</title>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-xl font-bold text-indigo-600 tracking-tight">
                <a href="/">MySiteLogo</a>
            </div>
            <nav>
                <ul class="flex space-x-6 font-medium text-gray-600">
                    <li><a href="/" class="hover:text-indigo-600 transition">Главная</a></li>
                    <li><a href="/array" class="hover:text-indigo-600 transition">Массивы</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    <main class="flex-grow max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 text-center md:text-left">
            Добро пожаловать на наш сайт!
        </h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div class="overflow-hidden rounded-xl shadow-md">
                <img src="{{ Vite::asset('resources/images/priroda.avif') }}" alt="Приветственное изображение" class="w-full h-auto object-cover">
            </div>

            <div class="space-y-4 text-lg text-gray-600 leading-relaxed">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </main>

   
    <footer class="bg-gray-900 text-gray-400 py-6 mt-auto">
        <div class="max-w-6xl mx-auto px-4 text-center text-sm">
            <p>&copy; {{ date('Y') }} | Приданников Никита | Все права защищены.</p>
        </div>
    </footer>

</body>
</html>
