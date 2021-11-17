<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Patient</th>
        <th>Date</th>
        <th>Dentist</th>
        <th>Cost</th>
        <th>Procedure</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->patient }}</td>
            <td>{{ $appointment->date }}</td>
            <td>{{ $appointment->dentist }}</td>
            <td>{{ $appointment->cost }}</td>
            <td>{{ $appointment->procedure }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('appointments.show', [$appointment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('appointments.edit', [$appointment->id]) }}" class='btn btn-default btn-xs'>
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
