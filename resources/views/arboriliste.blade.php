@extends('layouts.app')
@section('content')


<form action="/maraichageliste" method="post" class="section">

    @if(request('mois')== 'Janvier' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Fevrier' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Mars' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Avril' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Mai' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Juin' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Juillet' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Aout' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Septembre' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Octobre' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Novembre' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Décembre' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @endsection