@extends ('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @include('common.errors')
            <form action="{{ url('task') }}" method="post" class="form-horizontal">
                <div class="form-group">
                    <div class="row">
                        <label for="name" class="offset-sm-3 col-sm-1 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="offset-sm-4 col-sm-3">
                            <button type="submit" class="btn btn-success">Add task</button>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <br>
    @if($tasks->count())
        <div class="card card-default">
            <div class="card-header">
                Current tasks
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>
                                    {{ $task->name }}
                                </td>
                                <td>
                                    <form action="{{ url('task/'.$task->id) }}" method="post">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection