@extends('app')

@section('title', '修改資料')

@section('dormitorysystem_theme', '修改班表系統')

@section('dormitorysystem_contents')
        @include('message.list')
        {!! Form::model($shift, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ShiftController@update', $shift->id]]) !!}
        @include ('shift.form',['submitButtonText'=>"更新資料"])
        {!! Form::close()!!}
@endsection