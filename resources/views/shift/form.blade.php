<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <title>測試網站</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    </head>
    <body>
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
                    <td>{!! Form::select('11',$tags,$select_a11)!!}</td>
                    <td>{!! Form::select('21',$tags,$select_a21)!!}</td>
                    <td>{!! Form::select('31',$tags,$select_a31)!!}</td>
                    <td>{!! Form::select('41',$tags,$select_a41)!!}</td>
                    <td>{!! Form::select('51',$tags,$select_a51)!!}</td>
                </tr>
                <tr>
                    <td>11:00~12:00</td>
                    <td>{!! Form::select('12',$tags,$select_b12)!!}</td>
                    <td>{!! Form::select('22',$tags,$select_b22)!!}</td>
                    <td>{!! Form::select('32',$tags,$select_b32)!!}</td>
                    <td>{!! Form::select('42',$tags,$select_b42)!!}</td>
                    <td>{!! Form::select('52',$tags,$select_b52)!!}</td>
                </tr>
                <tr>
                    <td>12:00~13:00</td>
                    <td>{!! Form::select('13',$tags,$select_c13)!!}{!! Form::select('13_2',$tags,$select_c13_2)!!}{!! Form::select('13_3',$tags,$select_c13_3)!!}</td>
                    <td>{!! Form::select('23',$tags,$select_c23)!!}{!! Form::select('23_2',$tags,$select_c23_2)!!}{!! Form::select('23_3',$tags,$select_c23_3)!!}</td>
                    <td>{!! Form::select('33',$tags,$select_c33)!!}{!! Form::select('33_2',$tags,$select_c33_2)!!}{!! Form::select('33_3',$tags,$select_c33_3)!!}</td>
                    <td>{!! Form::select('43',$tags,$select_c43)!!}{!! Form::select('43_2',$tags,$select_c43_2)!!}{!! Form::select('43_3',$tags,$select_c43_3)!!}</td>
                    <td>{!! Form::select('53',$tags,$select_c53)!!}{!! Form::select('53_2',$tags,$select_c53_2)!!}{!! Form::select('53_3',$tags,$select_c53_3)!!}</td>
                </tr>
                <tr>
                    <td>13:00~14:00</td>
                    <td>{!! Form::select('14',$tags,$select_d14)!!}</td>
                    <td>{!! Form::select('24',$tags,$select_d24)!!}</td>
                    <td>{!! Form::select('34',$tags,$select_d34)!!}</td>
                    <td>{!! Form::select('44',$tags,$select_d44)!!}</td>
                    <td>{!! Form::select('54',$tags,$select_d54)!!}</td>
                </tr>
                <tr>
                    <td>14:00~15:00</td>
                    <td>{!! Form::select('15',$tags,$select_e15)!!}</td>
                    <td>{!! Form::select('25',$tags,$select_e25)!!}</td>
                    <td>{!! Form::select('35',$tags,$select_e35)!!}</td>
                    <td>{!! Form::select('45',$tags,$select_e45)!!}</td>
                    <td>{!! Form::select('55',$tags,$select_e55)!!}</td>
                </tr>
                <tr>
                    <td>15:00~16:00</td>
                    <td>{!! Form::select('16',$tags,$select_f16)!!}</td>
                    <td>{!! Form::select('26',$tags,$select_f26)!!}</td>
                    <td>{!! Form::select('36',$tags,$select_f36)!!}</td>
                    <td>{!! Form::select('46',$tags,$select_f46)!!}{!! Form::select('46_2',$tags,$select_f46_2)!!}{!! Form::select('46_3',$tags,$select_f46_3)!!}</td>
                    <td>{!! Form::select('56',$tags,$select_f56)!!}</td>
                </tr>
                <tr>
                    <td>16:00~17:00</td>
                    <td>{!! Form::select('17',$tags,$select_g17)!!}</td>
                    <td>{!! Form::select('27',$tags,$select_g27)!!}</td>
                    <td>{!! Form::select('37',$tags,$select_g37)!!}</td>
                    <td>{!! Form::select('47',$tags,$select_g47)!!}{!! Form::select('47_2',$tags,$select_g47_2)!!}{!! Form::select('47_3',$tags,$select_g47_3)!!}</td>
                    <td>{!! Form::select('57',$tags,$select_g57)!!}</td>
                </tr>
                <tr>
                    <td>17:00~18:00</td>
                    <td>{!! Form::select('18',$tags,$select_h18)!!}{!! Form::select('18_2',$tags,$select_h18_2)!!}{!! Form::select('18_3',$tags,$select_h18_3)!!}</td>
                    <td>{!! Form::select('28',$tags,$select_h28)!!}{!! Form::select('28_2',$tags,$select_h28_2)!!}{!! Form::select('28_3',$tags,$select_h28_3)!!}</td>
                    <td>{!! Form::select('38',$tags,$select_h38)!!}{!! Form::select('38_2',$tags,$select_h38_2)!!}{!! Form::select('38_3',$tags,$select_h38_3)!!}</td>
                    <td></td>
                    <td>{!! Form::select('58',$tags,$select_h58)!!}{!! Form::select('58_2',$tags,$select_h58_2)!!}{!! Form::select('58_3',$tags,$select_h58_3)!!}</td>
                </tr>
            </table>
            {!! Form::submit($submitButtonText,['class' => 'btn btn-primary btn-sm'])!!}
        </div>
    </body>
</html>