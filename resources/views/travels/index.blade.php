@extends('layouts.main')

@section('title') Travels @endsection

@section('content')
    <div class>
        <h1>Scegli il tuo prossimo viaggio</h1>
        <br>
    </div>

    <section id="travels-list">
        <div>
            @forelse ($travels as $travel)
            <div class="card">
                
                <h3> {{$travel->title}}</h3>
                
                <p>Destinazione: {{$travel->destination}}</p>
                <p>Periodo: {{$travel->period}}</p>
                <p>Prezzo a persona: {{$travel->price}} Euro</p>
                <hr>
                
            </div>
            
                
            @empty
            
            <p>Nessun viaggio disponibile
                
            </p>

                
            @endforelse

        </div>

    </section>

    <div>
        <h4>Torna alla <a href="{{route('home')}}">Home</a></h4>
    </div>
    
@endsection