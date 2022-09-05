@extends('layout')

@section('main')
@include('includes._navbar')
@include('includes._hero')
@include('includes._search')

@if($tasks)

    @foreach($tasks as $task)
    <div class="card ml-5" style="width:40%; border:1px solid rgb(168, 158, 158);border-radius:10px">
        <h3 class="text-center">{{ $task->title }}</h3>
        <p class="ml-3">{{ $task->urgency_level }}</p>
    </div>
    @endforeach

@else

    <h2 class="text-center">No task for you yet</h2>

@endif

@endsection