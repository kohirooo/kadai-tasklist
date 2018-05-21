@extends('layouts.app')


@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    <p>タスク:{{ $task->content }}</p>
    <p>status:{{ $task->status }}</p>

    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    {!! link_to_route('tasks.create', '新規タスクの投稿') !!}
    
@endsection