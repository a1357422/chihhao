@guest
<div>
    {!! Form::label('cardID','打卡：')!!}
    {!! Form::text('cardID',null,array('autofocus','autocomplete'=>"off",'placeholder'=>"請刷卡或輸入學號"))!!}
</div>
@else
<div>
    {!! Form::label('name','工讀生：')!!}
    {!! Form::select('name',$tags)!!}
</div>
<div>
    {!! Form::label('date','日期：')!!}
    {!! Form::date('date',\Carbon\Carbon::now())!!}
</div>
<div>
    {!! Form::label('punch_in','上班簽到時間：')!!}
    {!! Form::time('punch_in',date('H:i'))!!}
</div>
<div>
    {!! Form::label('punch_out','下班簽到時間：')!!}
    {!! Form::time('punch_out',date('H:i'))!!}
</div>
@endguest
<div>
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary btn-xl'])!!}
</div>