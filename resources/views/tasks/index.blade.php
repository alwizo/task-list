@extends ('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
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
@endsection