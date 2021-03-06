@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Replay / Show #{{ $replay->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('replays.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('replays.edit', $replay->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Topic_id</label>
<p>
	{{ $replay->topic_id }}
</p> <label>User_id</label>
<p>
	{{ $replay->user_id }}
</p> <label>Content</label>
<p>
	{{ $replay->content }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
