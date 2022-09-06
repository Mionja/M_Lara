@extends('layout')

@section('main')

@include('includes._navbar')
@include('includes._hero')
@include('includes._search')

@foreach($tasks as $task)
<div class="row">   
    <div class="col-3"></div>
    <div class="col-6 ml-5 mb-3 " style="width:50%; border:1px solid rgb(168, 158, 158);border-radius:10px">
        <h3 class="text-center">
            <form action="{{route(  'task.show', $task->id  )}}">
                @csrf
                @method('get')
                
                <input type="submit" value="{{ $task->title }}"> 
            </form>
            <p class=""> {{ $task->limit }}</p>
        </h3>
        <p class="ml-3">{{ $task->urgency_level }} important</p>
    </div>
</div>
@endforeach


@endsection