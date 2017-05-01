@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    @include('commons.error_messages')
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['処理前' => '処理前', '処理中' => '処理中', '処理済' => '処理済']) !!}
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection
