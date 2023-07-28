@extends('app')

@section('title', '後台權限管理')

@section('dormitorysystem_theme', '')

@section('dormitorysystem_contents')
<div class="function">
    <div class="maintitle_btn">
        <h3 class="custom-heading">後台權限管理</h3>
    </div>

</div>
@guest
<div class="form-container">
        <font color=blue><a href="{{ route('users.create') }}" class="btn btn-secondary">新建工讀生資料</a></font>
</div>
<div class="table-responsive">
    <table class="table">
        <tr class='column_center'>
            <th>使用者名稱</th>
            <th>卡號</th>
            <th>學號</th>
            <th>新增卡號</th>
        </tr>
        @foreach($users as $user)
        @if($user->name == "管理員")
            @continue
        @endif
        <tr class='column_center'>
            <td align="center" valign="center">{{ $user->name }}</td>
            <td align="center" valign="center">{{ $user->cardID }}</td>
            <td align="center" valign="center">{{ $user->studentID }}</td>
            @if($user->cardID == null)
            <td><font color=blue><a href="{{ route('users.edituser',['id'=>$user->id]) }}" class="btn btn-secondary">新增卡號</a></font></td>
            @else
            <td/>
            @endif
        </tr>
        @endforeach
    </table>
</div>
@else
<div class="form-container">
        <font color=blue><a href="{{ route('users.create') }}" class="btn btn-secondary">新建工讀生資料</a></font>
</div>
<div class="table-responsive">
    <table class="table">
        <tr class='column_center'>
            <th>編號</th>
            <th>使用者名稱</th>
            <th>卡號</th>
            <th>學號</th>
            <th>身份</th>
            <th>編輯</th>
            <th>刪除</th>
        </tr>
        @foreach($users as $user)
        @if($user->name == "管理員")
            @continue
        @endif
        <tr class='column_center'>
            <td align="center" valign="center">{{ $user->id }}</td>
            <td align="center" valign="center">{{ $user->name }}</td>
            <td align="center" valign="center">{{ $user->cardID }}</td>
            <td align="center" valign="center">{{ $user->studentID }}</td>
            @if($count == 1 && $user->role == 1)
            <td><font color=blue><a href="{{ route('users.edit',['id'=>$user->id,'role'=>0]) }}" class="btn btn-secondary">工讀生</a></font></td>
            @elseif($user->role == null && $count == 1 || $user->role == 0 && $count == 1)
            <td/>
            @elseif($count == 0)
            <td><font color=blue><a href="{{ route('users.edit',['id'=>$user->id,'role'=>1]) }}" class="btn btn-secondary">社長</a></font></td>
            @endif
            <td><font color=blue><a href="{{ route('users.edituser',['id'=>$user->id]) }}" class="btn btn-secondary">編輯</a></font></td>
            <td>
                <form action="{{ url('/users/delete', ['id' => $user->id]) }}" method="post">
                <button type="submit" class="btn btn-danger">刪除</button><!---->
                @method('delete')
                @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endguest
@endsection