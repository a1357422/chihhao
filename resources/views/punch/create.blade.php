<script>
    // 在這裡插入上述的JavaScript程式碼
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var userInput = prompt("請輸入後台管理者密碼：");
        if (userInput == "h123300q795"){
        }
        else{
            window.location.href = "https://www.lhu.edu.tw/index2.asp";
        }
    // 檢測到手機瀏覽器
    // 在這裡執行相應的操作，例如重新導向或顯示錯誤訊息
    }
</script>
@extends('app')

@section('title', '新增資料')

@section('dormitorysystem_theme', '新增打卡資料系統')

@section('dormitorysystem_contents')
    @include('message.list')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    {!! Form::open(['url'=>'punch/store'])!!}
    @include('punch.form',['submitButtonText'=>"打卡"])
    {!! Form::close()!!}
    <table class="table">
        <tr class='column_center'>
            <th>日期</th>
            <th>工讀生姓名</th>
            <th>上班簽到時間</th>
            <th>上班簽退時間</th>
            <th>時數</th>
            @guest
            @else
            <th>刪除</th>
            @endguest
        </tr>
        @foreach($punches as $punch)
        @guest
        @if($punch->mark == 1)
        <tr class='column_center'>
            <td align="center" valign="center"><font color=red>{{ $punch->date }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->user->name }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->punch_in }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->punch_out }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->time }}</font></td>
        </tr>
        @else
        <tr class='column_center'>
            <td align="center" valign="center">{{ $punch->date }}</td>
            <td align="center" valign="center">{{ $punch->user->name }}</td>
            <td align="center" valign="center">{{ $punch->punch_in }}</td>
            <td align="center" valign="center">{{ $punch->punch_out }}</td>
            <td align="center" valign="center">{{ $punch->time }}</td>
        </tr>
        @endif
        @else
        @if($punch->mark == 1)
        <tr class='column_center'>
            <td align="center" valign="center"><font color=red>{{ $punch->date }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->user->name }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->punch_in }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->punch_out }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->time }}</font></td>
            <td>
                <form action="{{ url('/punch/delete', ['id' => $punch->nameid,'punchid'=>$punch->id]) }}" method="POST">
                <button type="submit" class="btn btn-danger">刪除</button><!---->
                @method('delete')
                @csrf
                </form>
            </td>
        </tr>
        @endif
        @endguest
        @endforeach
    </table>
@endsection