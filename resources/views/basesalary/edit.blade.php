@extends('app')

@section('title', '修改資料')

@section('dormitorysystem_theme', '修改基本時薪系統')

@section('dormitorysystem_contents')
        @include('message.list')
        {!! Form::model($basesalary, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\BasesalaryController@update', $basesalary->id]]) !!}
        @include ('basesalary.form',['submitButtonText'=>"更新資料"])
        {!! Form::close()!!}
@endsection