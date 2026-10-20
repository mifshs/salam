<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Создание заявки</title>
</head>
<body>
    <form method="POST" action="{{ route('reports.update', $report->id) }}">
        @csrf
        @method('PUT')
        <h1>Номер автомобиля: {{ $report['number'] }}</h1>
        <h2>Описание: {{ $report['description'] }}</h2>
        <input type="text" placeholder="Номер авто" name="number">
        <input type="text" placeholder="Описание заявки" name="description">
        <input type="submit" value="Обновить">
    </form>
</body>
</html>