@extends('layout.main')

@section('content')
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
            <a href="{{ route('workers.index') }}">Назад</a>
        </div>
        <hr>
</div>
@endsection
