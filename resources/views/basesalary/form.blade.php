<div>
    {!! Form::label('basesalary','基本薪資：')!!}
    {!! Form::number('basesalary',$selectBasesalary)!!}
</div>
<div>
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary btn-xl'])!!}
</div>