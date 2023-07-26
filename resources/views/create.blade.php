@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message{
            color: red;
            font-size: 0. 8rem;
        }
    </style>
@section('content')

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    
    <div>
        <label for="id">Title</label>
        <input type="text" name = "title" id="title" value={{old('title')}}><br>
        @error('title')
        <span class="error-message">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{old('description')}}</textarea><br>
        @error('description')
        <span class="error-message">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10">{{old('long_description')}}</textarea><br>
        @error('long_description')
        <span class="error-message">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <button type="submit">Add Task</button>
    </div>

</form>
@endsection