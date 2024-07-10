@extends('layouts.app')

@section('home')

<div class="main">
    
    <div class="mask">

        <h2>Cerca il Treno</h2>

        <a class="mr-25" href="{{route('trains')}}">Tutte le corse</a>
        <a class="mr-25" href="{{route('trainsToDay')}}">Corse Odierne</a>
        <a href="{{route('trainsNextDay')}}">Corse Future</a>

    </div>

</div>


@endsection