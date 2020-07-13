<tr>
    <td>{{$task->id}}</td>
    <td>{{$task->name}}</td>
    <td class="task-item-control">
        <a href="{{route('tasks.edit', $task->id)}}">
            <button class="btn btn-warning mr-2 btn-sm">{{trans('task.update')}}</button>
        </a>
        <button class="btn btn-danger btn-sm btn_delete_task">{{trans('task.delete')}} </button>
    </td>
</tr>
