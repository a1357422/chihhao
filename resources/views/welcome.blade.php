@extends('app')

@section('title', '工讀生打卡系統')

@section('dormitorysystem_contents')
    @guest
        @include('message.list')
        {!! Form::open(['url'=>'punch/store'])!!}
        @include('punch.form',['submitButtonText'=>"打卡"])
        {!! Form::close()!!}

        <div class="table-responsive">
            <table class="table">
                <tr class='column_center'>
                    <th>編號</th>
                    <th>工讀生名稱</th>
                    <th>上班時間</th>
                    <th>下班時間</th>
                    <th>時數</th>
                </tr>
                @foreach($punches as $punch)
                <tr class='column_center'>
                    <td align="center" valign="center">{{ $punch->id }}</td>
                    <td align="center" valign="center">{{ $punch->user->name }}</td>
                    <td align="center" valign="center">{{ $punch->punch_in }}</td>
                    <td align="center" valign="center">{{ $punch->punch_out }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    @endguest
@endsection