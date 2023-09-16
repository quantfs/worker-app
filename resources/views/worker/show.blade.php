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
Show page
<div>
    <hr>
        <div>name: {{ $worker->name }}</div>
        <div>surname: {{ $worker->surname }}</div>
        <div>email: {{ $worker->email }}</div>
        <div>age: {{ $worker->age }}</div>
        <div>description: {{ $worker->description }}</div>
        <div>is_married: {{ $worker->is_married }}</div>
        <form action="" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
        <div>
            <a href="{{ route('worker.index') }}">Назад</a>
        </div>
        <hr>
</div>

</body>
</html>
