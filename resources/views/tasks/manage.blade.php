@extends('layout')

@section('main')
@include('includes._navbar')
<h2 class="text-center mb-4 mt-3 text-dark">Managing all your tasks</h2>
<table class="table table-striped table-hover">
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td><h4>{{$task->title}}</h4></td>
            <td>
                @if(  $task->urgency_level == 'very')
                <code class="text-danger">
                @else
                <code class="text-dark">
                @endif
                [       {{$task->urgency_level}} important,
                        @if($task->limit)
                            Time limit: {{ $task->limit }}    
                        @else
                        No time limit
                        @endif
                ]
                </code>
            </td>
            <td>Task creation: {{ $task->created_at }}</td>
            <td>
                <form action="{{route(  'task.edit', $task->id  )}}" method="POST">
                    @csrf
                    @method('get')
                    <input type="hidden" name="task" value="{{$task}}">
                    <button type="submit" class="btn btn-dark mt-3">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{route('task.destroy', $task->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mt-3 mr-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection