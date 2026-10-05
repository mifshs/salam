<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
      
    <main class="flex-grow w-full px-4 py-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Список продуктов</h1>
        

        <div class="max-w-2xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8">
            
            @foreach($array as $item)

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition flex flex-col w-full">
                    
               
                    <div class="relative h-48 w-full bg-gray-100 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" class="w-full h-full object-cover">
                    </div>

                 
                    <div class="p-5 flex flex-col flex-grow justify-betwee">
                        <div>
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">ID: {{ $item['id'] }}</span>
                            <h3 class="text-xl font-bold text-gray-800 mt-1 mb-2">{{ $item['title'] }}</h3>
                        </div>
                        
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-xl font-black text-indigo-600">{{ $item['price'] }} &#8381;</p>
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                                Купить
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        <a href="/home" class="text-">Домой</a>
    </main>

</body>
</html>