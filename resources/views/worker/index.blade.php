@extends('layout.main')

@section('content')
<div>
    <hr>
        <div>
            <a href="{{ route('worker.create') }}">Добавить</a>
        </div>
        <div>
            <form action="{{ route('worker.index') }}">
                <input type="text" name="name" placeholder="name" value="{{ request()->get('name') }}">
                <input type="text" name="surname" placeholder="surname" value="{{ request()->get('surname') }}">
                <input type="text" name="email" placeholder="email" value="{{ request()->get('email') }}">
                <input type="number" name="from" placeholder="from" value="{{ request()->get('from') }}">
                <input type="number" name="to" placeholder="to" value="{{ request()->get('to') }}">
                <input type="text" name="description" placeholder="description" value="{{ request()->get('description') }}">
                <input type="checkbox" name="is_married" id="isMarried"
                    {{ request()->get('is_married') ? ' checked' : '' }}
                >
                <label for="isMarried">is_married</label>

                <input type="submit" value="Отправить">
                <a href="{{ route('worker.index') }}">Сбросить</a>

            </form>
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
    <div class="my-nav">
        {{ $workers->withQueryString()->links() }}
    </div>
</div>
@endsection

