@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    @include('commons.error_messages')
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['処理前' => '処理前', '処理中' => '処理中', '処理済' => '処理済']) !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection
