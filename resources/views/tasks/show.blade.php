@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}

@endsection
