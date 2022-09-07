@extends('layout')

@section('main')
@include('includes._navbar')

@if(  $task->urgency_level == 'very')
<div class="jumbotron text-dark" style="background-color: rgb(207, 119, 112)">
    <h2 class="text-center mt-2">{{ $task->title }}</h2>
    <code class="text-light" style="font-size: 17px">[ {{ $task->urgency_level }} important, 
@else
<div class="jumbotron text-dark" style="background-color: light">
    <h2 class="text-center mt-2">{{ $task->title }}</h2>
    <code class="text-danger" style="font-size: 17px">[ {{ $task->urgency_level }} important, 
@endif
        @if($task->limit)
            Time limit: {{ $task->limit }}    
        @else
        No time limit
        @endif]</code>
    <p class="mt-4">{{ $task->description }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate mollitia quam ipsa ullam excepturi quae quibusdam quia, deleniti facere architecto voluptas fuga est aspernatur ut nemo. Assumenda repellendus corporis ullam rem mollitia iure delectus libero, maxime nobis voluptatum voluptate quod tenetur repudiandae laudantium? Quibusdam ipsum non laudantium hic aperiam ratione debitis animi, cumque consequuntur nulla vel vitae aut, quidem quasi tempora deserunt doloribus quo deleniti sunt tenetur. Enim aut, quisquam voluptatibus ipsam, explicabo ratione tempora deleniti quia nemo voluptates tenetur fugiat facilis eius. Tenetur at ipsa dolor sequi ad? Ea at dolorem corrupti, repudiandae quas quam modi facere ratione illum!</p>
    <span class="float-right">
        Task creation: {{ $task->created_at }}
    </span>
    <div class="row">
        <a href="{{route('task.index')}}" class="btn btn-outline-dark mt-3 mr-2">Go back</a>
        <form action="{{route(  'task.edit', $task->id  )}}">
            @csrf
            @method('get')
            
            <button type="submit" class="btn btn-dark mt-3">Edit</button>
        </form>
    </div>
</div>

@endsection