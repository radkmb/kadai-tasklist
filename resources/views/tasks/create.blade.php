@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', [
            'ToDo' => 'ToDo',
            'Doing' => 'Doing',
            'Done' => 'Done'
        ]) !!}
        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection