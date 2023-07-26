<h1>
  The list of tasks
</h1>
@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
  {{-- @if (count($tasks)) --}}
  @forelse ($tasks as $task)
    <div>
      <h2>{{ $task->title }}</h2>
      <p>{{ $task->description }}</p>
      @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
      @endif
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
  {{-- @endif --}}
@endsection
