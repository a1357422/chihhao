@if($edituser == 0 || $login == 1)
<div>
    {!! Form::label('name','工讀生姓名')!!}
    {!! Form::text('name',$selectName)!!}
</div>
<div>
    {!! Form::label('studentID','學號')!!}
    {!! Form::text('studentID',$selectStudentID)!!}
</div>
<div>
    {!! Form::label('cardID','卡號')!!}
    {!! Form::text('cardID',$selectCardID)!!}
</div>
@else ($edituser == 0 && $login == 0)
<div>
    工讀生姓名：{{$selectName}}
    {!! Form::hidden('name',$selectName)!!}
</div>
<div>
    學號：{{$selectStudentID}}
    {!! Form::hidden('studentID',$selectStudentID)!!}
</div>
<div>
    {!! Form::label('cardID','卡號')!!}
    {!! Form::text('cardID',$selectCardID,array('autofocus'))!!}
</div>

@endif
<div>
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary btn-xl'])!!}
</div>
