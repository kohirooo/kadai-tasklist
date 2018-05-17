@extends('layouts.app')

@section('content')

    <h1>タスクジ新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

@endsection
