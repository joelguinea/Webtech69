<!-- Patient Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient', 'Patient:') !!}
    {!! Form::text('patient', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Dentist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dentist', 'Dentist:') !!}
    {!! Form::text('dentist', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure', 'Procedure:') !!}
    {!! Form::text('procedure', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>