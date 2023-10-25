@extends('layout.main')

@section('content')
<div>
    <hr>
    <form action="{{ route('workers.store') }}" method="post">
        @csrf
        <div style="margin-bottom: 15px">
            <input type="text" name="name" placeholder="name"
            value="{{ old('name') }}">
            @error('name')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px"><input type="text" name="surname" placeholder="surname"
            value="{{ old('surname') }}">
            @error('surname')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px"><input type="email" name="email" placeholder="email"
            value="{{ old('email') }}">
            @error('email')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>
        <div style="margin-bottom: 15px"><input type="number" name="age" placeholder="age"
            value="{{ old('age') }}">
        </div>
        <div style="margin-bottom: 15px"><textarea name="description" placeholder="description">
                {{ old('description') }}
            </textarea>
        </div>
        <div style="margin-bottom: 15px">
            <input type="checkbox" name="is_married" placeholder="is_married" id="is_married"
            {{ old('is_married') === 'on' ? ' checked' : '' }}
            >
            <label for="isMarried">isMarried</label>
        </div>
        <div><input type="submit" value="Добавить"></div>
    </form>
</div>
@endsection
