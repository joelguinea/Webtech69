<!-- Patient Field -->
<div class="col-sm-12">
    {!! Form::label('patient', 'Patient:') !!}
    <p>{{ $appointment->patient }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $appointment->date }}</p>
</div>

<!-- Dentist Field -->
<div class="col-sm-12">
    {!! Form::label('dentist', 'Dentist:') !!}
    <p>{{ $appointment->dentist }}</p>
</div>

<!-- Cost Field -->
<div class="col-sm-12">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{{ $appointment->cost }}</p>
</div>

<!-- Procedure Field -->
<div class="col-sm-12">
    {!! Form::label('procedure', 'Procedure:') !!}
    <p>{{ $appointment->procedure }}</p>
</div>

