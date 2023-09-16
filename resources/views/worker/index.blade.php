<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Index page
<div>
    <hr>
        <div>
            <a href="{{ route('worker.create') }}">Добавить</a>
        </div>
    <hr>
    @foreach($workers as $worker)
        <div>name: {{ $worker->name }}</div>
        <div>surname: {{ $worker->surname }}</div>
        <div>email: {{ $worker->email }}</div>
        <div>age: {{ $worker->age }}</div>
        <div>description: {{ $worker->description }}</div>
        <div>is_married: {{ $worker->is_married }}</div>
        <div>
            <div>
                <a href="{{ route('worker.show', $worker) }}">Посмотреть</a>
            </div>
            <div>
                <a href="{{ route('worker.edit', $worker) }}">Редактировать</a>
            </div>
            <form action="{{ route('worker.delete', $worker) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить">
            </form>
        </div>
        <hr>
    @endforeach
</div>

</body>
</html>
