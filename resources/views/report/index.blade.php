<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Все заявки</h1> 
    <a href="{{ route('create') }}" class="px-5 py-5 bg-blue-500 rounded">Создать заявку</a>
    <div class="mt-10 flex flex-col px-5 py-5 bg-blue-100 gap-5 justify-center items-center">
        <h2>Сортировка по дате создания:</h2>
        <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}" class="px-1 py-1 bg-blue-500 rounded text-center">Сначала новые</a>
        <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}" class="px-1 py-1 bg-blue-500 rounded text-center">Сначала старые</a>
        <h2>Фильтрация по статусу заявки:</h2>
            <ul class="flex flex-col gap-5">
                @foreach($statuses as $status)
                    <li class="flex flex-col">
                        <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $status->id]) }}" class="px-1 py-1 bg-blue-500 rounded text-center">
                            {{ $status->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
    </div>
    <div class="grid grid-cols-4 px-5 py-5 bg-blue-200 gap-10 mt-20">
        @foreach ($reports as $report)
        <div class="px-4 py-4 border-2 rounded-2xl flex flex-col justify-between">
            <div>
                <h1>Номер автомобиля: {{ $report['number'] }}</h1>
                <h2>Описание: {{ $report['description'] }}</h2>
                <h3>Дата создания: {{ $report['created_at'] }}</h3>
            </div>
            
            <div class="flex gap-4 mt-4">
                <a href="{{ route('reports.edit', $report->id) }}" class="px-3 py-1 bg-blue-500 rounded">Редактировать</a>

                <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Удалить" class="px-3 py-1 bg-blue-500 rounded ">
                </form>
            </div>
        </div>
        @endforeach
        {{$reports->appends(request()->query())->links()}}

    </div>
</body>
</html>
