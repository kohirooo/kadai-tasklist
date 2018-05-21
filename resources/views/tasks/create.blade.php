@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
     <div class="row">
        <div class="col-xs-6">
        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}
    </div>
    <div class="form-group">
            {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
    </div>

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    
    {!! Form::close() !!}
    </div>
    </div>

@endsection
