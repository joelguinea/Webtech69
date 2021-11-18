<div class="table-responsive">
    <table class="table" id="hotels-table">
        <thead class="bg-dark">
            <tr>
                <th>Hotelname</th>
        <th>Address</th>
        <th>Date Time Checkin</th>
        <th>Date Time Checkout</th>
        <th>Room Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hotels as $hotel)
            <tr class = "bg-primary">
                <td>{{ $hotel->HotelName }}</td>
            <td>{{ $hotel->address }}</td>
            <td>{{ $hotel->date_time_checkin }}</td>
            <td>{{ $hotel->date_time_checkout }}</td>
            <td>{{ $hotel->room_price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hotels.destroy', $hotel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hotels.show', [$hotel->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hotels.edit', [$hotel->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
