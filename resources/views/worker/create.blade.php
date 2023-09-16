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
Create page
<div>
    <hr>
    <form action="{{ route('worker.store') }}" method="post">
        @csrf
        <div style="margin-bottom: 15px"><input type="text" name="name" placeholder="name"></div>
        <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname"></div>
        <div style="margin-bottom: 15px"><input type="email" name="email" placeholder="email"></div>
        <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age"></div>
        <div style="margin-bottom: 15px"><textarea name="description" placeholder="description"></textarea></div>
        <div style="margin-bottom: 15px">
            <input type="checkbox" name="is_married" placeholder="is_married" id="is_married">
            <label for="isMarried">isMarried</label>
        </div>
        <div><input type="submit" value="Добавить"></div>

    </form>

</div>

</body>
</html>
