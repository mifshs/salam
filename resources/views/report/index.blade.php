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
    <a href="{{ route('create') }}" class="px-5 py-5 bg-blue-500">Создать заявку</a>
    <div class="grid grid-cols-4 px-5 py-5 bg-blue-200 gap-10 mt-20">
            @foreach ($reports as $report)
            <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                @method('delete')
                @csrf
                <div class="px-4 py-4 border-2 rounded-2xl flex justify-between">
                    <h1>Номер автомобиля: {{ $report['number'] }}</h1>
                    <h2>Описание: {{ $report['description'] }}</h2>
                    <h3>Дата создания: {{ $report['created_at'] }}</h3>
                    <input type="submit" value="Удалить">
                </div>
            </form>
            @endforeach
    </div>
</body>
</html>