@extends('app')

@section('title', '打卡紀錄管理')

@section('dormitorysystem_theme', '')

@section('dormitorysystem_contents')
<div class="function">
    <div class="maintitle_btn">
        <h3 class="custom-heading">打卡紀錄管理</h3>
    </div>
</div>
<div class="form-container">
    <form action="{{ url('punch/month') }}" method='POST'>
        {!! Form::label('month', '月份：') !!}
        {!! Form::select('month', array('1' => '1月' , '2' => '2月', '3' => '3月', '4' => '4月', '5' => '5月', '6' => '6月', '7' => '7月', '8' => '8月', '9' => '9月', '10' => '10月', '11' => '11月', '12' => '12月'),$date) !!}
        {!! Form::hidden('nameid', $nameid) !!}
        <input type="submit" value="查詢" class="btn btn-secondary" />
        @guest
        @else
        <font color=blue><a href="{{ route('punch.createuserdata',['id'=>$nameid]) }}" class="btn btn-secondary">新增紀錄</a></font>
        @endguest
        @csrf
    </form>
</div>
<div class="table-responsive">
    <table class="table">
        <tr class='column_center'>
            <th>{{$date}}月總時數</th>
            <th>薪資試算(時薪{{$basesalary}})</th>
        </tr>
        <tr class='column_center'>
            <td align="center" valign="center"><strong>{{ $text }}</strong></td>
            <td align="center" valign="center"><strong>{{$hourtags[$user->id]}}*{{$basesalary}} = {{ $totalmoneys[$user->id] }}元</strong></td>
    </tr>
    </table>
</div>
<div class="table-responsive">
    <table class="table">
        <tr class='column_center'>
            <th>日期</th>
            <th>工讀生姓名</th>
            <th>上班簽到時間</th>
            <th>上班簽退時間</th>
            <th>時數</th>
            @guest
            @else
            <th>編輯</th>
            <th>刪除</th>
            @endguest
        </tr>
        @foreach($punches as $punch)
        <tr class='column_center'>
            @if($punch->mark === 1)
            <td align="center" valign="center"><font color=red>{{ $punch->date }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->user->name }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->punch_in }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->punch_out }}</font></td>
            <td align="center" valign="center"><font color=red>{{ $punch->time }}</font></td>
            @else
            <td align="center" valign="center">{{ $punch->date }}</td>
            <td align="center" valign="center">{{ $punch->user->name }}</td>
            <td align="center" valign="center">{{ $punch->punch_in }}</td>
            <td align="center" valign="center">{{ $punch->punch_out }}</td>
            <td align="center" valign="center">{{ $punch->time }}</td>
            @endif
            @guest
            @else
            <td>
                <font color=blue><a href="{{ route('punch.edit',['id'=>$punch->id]) }}" class="btn btn-secondary">修改資料</a></font>
            </td>
            <td>
                <form action="{{ url('/punch/delete', ['id' => $punch->nameid,'punchid'=>$punch->id]) }}" method="POST">
                <button type="submit" class="btn btn-danger">刪除</button><!---->
                @method('delete')
                @csrf
                </form>
            </td>
            @endguest
        </tr>
        @endforeach
    </table>
</div>
@endsection