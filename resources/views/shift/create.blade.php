@extends('app')

@section('title', '新增資料')

@section('dormitorysystem_theme', '新增班表系統')

@section('dormitorysystem_contents')
        @include('message.list')
        {!! Form::open(['url'=>'shift/store'])!!}
        @include('shift.form',['submitButtonText'=>"新增班表資料"])
        {!! Form::close()!!}
@endsection