<!-- Hotelname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HotelName', 'Hotelname:') !!}
    {!! Form::text('HotelName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Time Checkin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time_checkin', 'Date Time Checkin:') !!}
    {!! Form::text('date_time_checkin', null, ['class' => 'form-control','id'=>'date_time_checkin']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_time_checkin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Date Time Checkout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time_checkout', 'Date Time Checkout:') !!}
    {!! Form::text('date_time_checkout', null, ['class' => 'form-control','id'=>'date_time_checkout']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_time_checkout').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Room Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_price', 'Room Price:') !!}
    {!! Form::number('room_price', null, ['class' => 'form-control']) !!}
</div>