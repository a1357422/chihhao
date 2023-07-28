@extends('app')

@section('title', '修改資料')

@section('dormitorysystem_theme', '修改工讀生資料系統')

@section('dormitorysystem_contents')
        @include('message.list')
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\UsersController@update', $user->id]]) !!}
        @include ('users.form',['submitButtonText'=>"更新資料"])
        {!! Form::close()!!}
@endsection