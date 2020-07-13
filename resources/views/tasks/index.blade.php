@extends('layouts.app')

@section('content')

<div class="ml-5 mr-5 mt-5 ">
    <h2>{{trans('task.task_management')}}</h2>
    <a href="{{route('tasks.create')}}">
        <button class="btn btn-primary  mb-3 p-2">{{trans('task.new_task')}}</button>
    </a>
    <table class="table table-stripped">
        <tr>
            <td>{{trans('task.order_number')}}</td>
            <td>{{trans('task.name')}}</td>
            <td>{{trans('task.action')}}</td>
        </tr>
        @each('tasks.task_item', $tasks, 'task')
    </table>
    {{$tasks->links()}}
</div>

@endsection
