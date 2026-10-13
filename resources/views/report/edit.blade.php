<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Создание заявки</title>
</head>
<body>
    <form method="POST" action="{{ route('reports.store') }}">
        @csrf
        <input type="text" placeholder="Номер авто" name="number">
        <input type="text" placeholder="Описание заявки" name="description">
        <input type="submit" value="Обновить">
    </form>
</body>
</html>