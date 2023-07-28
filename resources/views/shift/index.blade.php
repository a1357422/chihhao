@extends('app')

@section('title', '新增資料')

@section('dormitorysystem_theme', '')

@section('dormitorysystem_contents')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    </head>
    <body>
    @guest
    @else
    <div class="form-container">
        <font color=blue><a href="{{ route('shift.create') }}" class="btn btn-secondary">新增班表</a></font>
        <font color=blue><a href="{{ route('shift.edit',['id'=>1]) }}" class="btn btn-secondary">編輯班表</a></font>
    </div>
    @endguest
    @if($shift != null)
        <div style = "text-align:center;">
            <h1>排班表</h1>    
            <table>
                <tr>
                  <td>  </td>
                  <td>一</td>
                  <td>二</td>
                  <td>三</td>
                  <td>四</td>
                  <td>五</td>
                </tr>
                <tr>
                    <td>10:00~11:00</td>
                    <td>{{$shift->a11}}</td>
                    <td>{{$shift->a21}}</td>
                    <td>{{$shift->a31}}</td>
                    <td>{{$shift->a41}}</td>
                    <td>{{$shift->a51}}</td>
                </tr>
                <tr>
                    <td>11:00~12:00</td>
                    <td>{{$shift->b12}}</td>
                    <td>{{$shift->b22}}</td>
                    <td>{{$shift->b32}}</td>
                    <td>{{$shift->b42}}</td>
                    <td>{{$shift->b52}}</td>
                </tr>
                <tr>
                    <td>12:00~13:00</td>
                    <td>{{$shift->c13}}{{$shift->c13_2}}{{$shift->c13_3}}</td>
                    <td>{{$shift->c23}}{{$shift->c23_2}}{{$shift->c23_3}}</td>
                    <td>{{$shift->c33}}{{$shift->c33_2}}{{$shift->c33_3}}</td>
                    <td>{{$shift->c43}}{{$shift->c43_2}}{{$shift->c43_3}}</td>
                    <td>{{$shift->c53}}{{$shift->c53_2}}{{$shift->c53_3}}</td>
                </tr>
                <tr>
                    <td>13:00~14:00</td>
                    <td>{{$shift->d14}}</td>
                    <td>{{$shift->d24}}</td>
                    <td>{{$shift->d34}}</td>
                    <td>{{$shift->d44}}</td>
                    <td>{{$shift->d54}}</td>
                </tr>
                <tr>
                    <td>14:00~15:00</td>
                    <td>{{$shift->e15}}</td>
                    <td>{{$shift->e25}}</td>
                    <td>{{$shift->e35}}</td>
                    <td>{{$shift->e45}}</td>
                    <td>{{$shift->e55}}</td>
                </tr>
                <tr>
                    <td>15:00~16:00</td>
                    <td>{{$shift->f16}}</td>
                    <td>{{$shift->f26}}</td>
                    <td>{{$shift->f36}}</td>
                    <td>{{$shift->f46}}{{$shift->f46_2}}{{$shift->f46_3}}</td>
                    <td>{{$shift->f56}}</td>
                </tr>
                <tr>
                    <td>16:00~17:00</td>
                    <td>{{$shift->g17}}</td>
                    <td>{{$shift->g27}}</td>
                    <td>{{$shift->g37}}</td>
                    <td>{{$shift->g47}}{{$shift->g47_2}}{{$shift->g47_3}}</td>
                    <td>{{$shift->g57}}</td>
                </tr>
                <tr>
                    <td>17:00~18:00</td>
                    <td>{{$shift->h18}}{{$shift->h18_2}}{{$shift->h18_3}}</td>
                    <td>{{$shift->h28}}{{$shift->h28_2}}{{$shift->h28_3}}</td>
                    <td>{{$shift->h38}}{{$shift->h38_2}}{{$shift->h38_3}}</td>
                    <td/>
                    <td>{{$shift->h58}}{{$shift->h58_2}}{{$shift->h58_3}}</td>
                </tr>
            </table>
        </div>
    @else
    @endif
    </body>
</html>
@endsection