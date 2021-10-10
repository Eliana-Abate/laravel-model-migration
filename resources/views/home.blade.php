@extends('layouts.main')

@section('title') Home @endsection

@section('content')

    <div>
        <h1>Benvenuto/a!</h1>

        <h3>Prenota il tuo prossimo viaggio...</h3>

        <p>Clicca qui <a href="{{route('travels.index')}}">Travels</a></p>

    </div>
    
@endsection