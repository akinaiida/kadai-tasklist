@extends('layouts.app')

@section('content')

    <h1>新規タスク登録ページ</h1>

    @include('commons.error_messages')
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク名：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::select('status', ['処理前' => '処理前', '処理中' => '処理中', '処理済' => '処理済'], null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-success']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection
