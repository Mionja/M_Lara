@extends('layout')

@section('link')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('main')
@include('includes._navbar')

<div class="page-wrapper pt-5 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Add task</h2>


                <form action="{{route('task.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="input-group mt-5">
                        <input class="input--style-2 @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{old('title')}}">
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <span class="" style="font-size:16px">Time Limit:</span>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <input class="input--style-2" type="date" name="limit" value="{{old('limit')}}">
                            </div>
                        </div>
                    </div>

                     <div class="mb-3 mt-3">
                         <span class="mb-3 mr-3" style="font-size:16px">Level of urgency:</span>
                         <select name="urgency_level" class="input--style-2">
                                <option value="" selected></option>
                                <option value="less">Less important</option>
                                <option value="quite">Quite important</option>
                                <option value="very">Very important</option>
                         </select>
                    </div>

                    <textarea class="form-control @error('description') is-invalid @enderror mt-5" placeholder="Description" name="description">{{old("description")}}</textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button type="submit" class="btn btn-lg btn-dark btn--radius mt-5">Add</button>
                </form>


            </div>
        </div>
    </div>
</div>


@endsection