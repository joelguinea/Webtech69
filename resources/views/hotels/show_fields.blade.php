<!-- Hotelname Field -->
<div class="col-sm-12">
    {!! Form::label('HotelName', 'Hotelname:') !!}
    <p>{{ $hotel->HotelName }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $hotel->address }}</p>
</div>

<!-- Date Time Checkin Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_checkin', 'Date Time Checkin:') !!}
    <p>{{ $hotel->date_time_checkin }}</p>
</div>

<!-- Date Time Checkout Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_checkout', 'Date Time Checkout:') !!}
    <p>{{ $hotel->date_time_checkout }}</p>
</div>

<!-- Room Price Field -->
<div class="col-sm-12">
    {!! Form::label('room_price', 'Room Price:') !!}
    <p>{{ $hotel->room_price }}</p>
</div>

