<div>
    {!! Form::label('punch_in','上班簽到時間：')!!}
    {!! Form::time('punch_in',$selectPunch_in)!!}
</div>
<div>
    {!! Form::label('punch_out','下班簽到時間：')!!}
    {!! Form::time('punch_out',$selectPunch_out)!!}
</div>
<div>
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary btn-xl'])!!}
</div>
