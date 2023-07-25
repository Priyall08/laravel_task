@extends('layouts.app')
@section('title','add task')
@section('content')

<form method="POST" action="{{ url('register') }}">
    @csrf
    <div>
        <label for="id">Title</label>
        <input type="text" name = "title" id="title">
        @error('title')
        <span class="error-message">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"></textarea>
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Add Task</button>
    </div>

</form>
@endsection
