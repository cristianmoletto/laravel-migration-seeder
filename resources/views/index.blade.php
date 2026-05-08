@extends("layouts.master")

@section("title", "www.trenitalya.it")

@section("content")
<h1>Lista dei treni</h1>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">company</th>
            <th scope="col">departure station</th>
            <th scope="col">arrival station</th>
            <th scope="col">depart at</th>
            <th scope="col">arrive at</th>
            <th scope="col">train code</th>
            <th scope="col">carriage</th>
            <th scope="col">is delay</th>
            <th scope="col">is canceled</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($trains as $train)
        <tr>
            <th scope="row">{{ $train['company'] }}</th>
            <td>{{ $train['start_station'] }}</td>
            <td>{{ $train['arrival_station'] }}</td>
            <td>{{ $train['start_time'] }}</td>
            <td>{{ $train['arrival_time'] }}</td>
            <td>{{ $train['train_code'] }}</td>
            <td>{{ $train['carriages_amount'] }}</td>
            <td>{{ $train['is_on_time'] == 0 ? 'NO' : 'SI' }}</td>
            <td>{{ $train['is_canceled'] == 0 ? 'NO' : 'SI' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection