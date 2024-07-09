@extends( 'layouts.app' )

@section( 'content' )

<main class="tabella">

    <div class="container-lg mt-5 mb-5">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Time of Departure</th>
                    <th>Arrival Time</th>
                    <th>Train Code</th>
                    <th>Coach Number</th>
                    <th>On Schedule</th>
                    <th>Cancelled</th>
                </tr>
            </thead>
            <tbody>

                {{-- ? ciclo per il numero totale dei treni --}}
                @foreach ($trains as $train)
    
                <tr>
                    <td> {{$train->company}} </td>
                    <td> {{$train->departure_station}} </td>
                    <td> {{$train->arrival_station}} </td>
                    <td> {{$train->time_of_departure}} </td>
                    <td> {{$train->arrival_time}} </td>
                    <td> {{$train->train_code}} </td>
                    <td> {{$train->coach_number}} </td>
                    <td> {{$train->on_schedule ? 'Sì' : 'NO'}} </td>
                    <td> {{$train->cancelled ? 'SÌ' : 'NO'}} </td>
                </tr>
                    
                @endforeach
                
            </tbody>
        </table>

    </div>
    

</main>

@endsection