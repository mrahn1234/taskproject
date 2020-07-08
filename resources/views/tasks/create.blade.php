@extends('layouts.app')

@section('content')
    <div class="ml-5 mr-5 mt-5 ">
        @include('layouts.errors')
        <a href="{{route('tasks.index')}}">
            <button class="btn btn-warning" >{{trans('task.back')}}</button>
        </a>
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <h4 class="badge badge-default">{{trans('task.name')}}</h4>
            <input class= "form-control mb-3" type="text" name="name" />
            <button type="submit" class="btn btn-primary">{{trans('task.submit')}}</button>  
        </form>
    </div>

@endsection
