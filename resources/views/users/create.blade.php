@extends('app')

@section('title', '新增資料')

@section('dormitorysystem_theme', '新增工讀生資料系統')

@section('dormitorysystem_contents')
        @include('message.list')
        {!! Form::open(['url'=>'users/store'])!!}
        @include('users.form',['submitButtonText'=>"新增工讀生資料"])
        {!! Form::close()!!}
@endsection