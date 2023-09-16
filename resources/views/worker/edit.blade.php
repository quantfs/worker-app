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
    <form action="{{ route('worker.update', $worker) }}" method="Post">
        @method('Patch')
        @csrf
        <div style="margin-bottom: 15px"><input type="text" name="name" placeholder="name" value="{{$worker->name}}"></div>
        <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname" value="{{$worker->surname}}"></div>
        <div style="margin-bottom: 15px"><input type="email" name="email" placeholder="email" value="{{$worker->email}}"></div>
        <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age" value="{{$worker->age}}"></div>
        <div style="margin-bottom: 15px"><textarea name="description" placeholder="description">{{ $worker->description }}</textarea></div>
        <div style="margin-bottom: 15px">
            <input type="checkbox" name="is_married" placeholder="is_married" id="is_married"
                {{ $worker->is_married ? 'checked' : '' }}
            >
            <label for="isMarried">isMarried</label>
        </div>
        <div><input type="submit" value="Сохранить"></div>

    </form>

</div>

</body>
</html>