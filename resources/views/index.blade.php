@extends( 'layouts.app' )

@section( 'content' )

<main class="tabella">

    <div class="container-lg ">

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
                    <td class="text-center"> {{\Carbon\Carbon::parse($train->time_of_departure)->format('d/m/Y')}} </td>
                    <td class="text-center"> {{\Carbon\Carbon::parse($train->arrival_time)->format('d/m/Y')}} </td>
                    <td class="text-center"> {{$train->train_code}} </td>
                    <td class="text-center"> {{$train->coach_number}} </td>
                    <td class="text-center"> {{$train->on_schedule ? 'Sì' : 'NO'}} </td>
                    <td class="text-center"> {{$train->cancelled ? 'SÌ' : 'NO'}} </td>
                </tr>
                    
                @endforeach
                
            </tbody>
        </table>

    </div>
    

</main>

@endsection