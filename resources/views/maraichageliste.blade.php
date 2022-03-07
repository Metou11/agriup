@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="card-text h3">
                    Les spéculations favorables pour le mois de <strong>{{ request('mois') }}</strong> sont:
                </p>
            </div>
        </div>
    </div>
    @foreach ($tableauMois[request('mois')] as $ligneTableau)
        <div class="col-md-6">
            <div class="card">
                <img style="height: 500px; min-height: 500px; object-fit: contain" class="card-img-top" src="{{ $ligneTableau['image'] }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $ligneTableau['nom'] }}</h4>
                </div>
                <div class="card-footer">
                    <a href="{{ $ligneTableau[  'route'] }}" class="btn btn-success">Visualiser</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<form action="/maraichageliste" method="post" class="section">

    @if(request('mois')== 'Janvier' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>


    @endif
    @if(request('mois')== 'Février' )
    <marquee>
        <h1> les speculations favorables pour le mois choisi est:</h1>
    </marquee>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/poivron" role="button">Poivron</a>
                        <img src="image/poivron.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/aubergine" role="button">Aubergine</a>
                        <br>
                        <br>
                        <img src="image/imgaubergine.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/piment" role="button">Piment</a>
                        <img src="image/piment.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/tomate" role="button">Tomate</a>
                        <img src="image/tomate.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/melon" role="button">Melon</a>
                        <img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(request('mois')== 'Mars' )
    <marquee>
        <h1> LES SPECULATIONS FAVORABLES POUR LE MOIS DE MARS</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/poivron" role="button">Poivron</a>
                        <br>
                        <img src="image/poivron.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/aubergine" role="button">Aubergine</a>
                        <br>
                        <br>
                        <img src="image/imgaubergine.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/piment" role="button">Piment</a>
                        <br>
                        <img src="image/piment.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/tomate" role="button">Tomate</a>
                        <br>
                        <img src="image/tomate.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/melon" role="button">Melon</a>
                        <br>
                        <img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @if(request('mois')== 'Avril' )
    <marquee>
        <h1> les speculations favorables pour le mois d'avril</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/concombre" role="button">Concombre</a>
                        <br>
                        <br>
                        <img src="image/concombre.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/laitue" role="button">Laitue</a>
                        <img src="image/imglaitue.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/choux" role="button">Choux Pomme</a>
                        <br>
                        <br>
                        <img src="image/imgchoux.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/gombo" role="button">Gombo</a>
                        <br>
                        <img src="image/gombo.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/melon" role="button">Melon</a>
                        <br>
                        <img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/carotte" role="button">Carotte</a>
                        <br>
                        <br>
                        <img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/oignon" role="button">Oignon</a>
                        <br>
                        <br>
                        <img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endif
    @if(request('mois')== 'Mai' )
    <marquee>
        <h1> les speculations favorables pour le mois de Mai</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/concombre" role="button">Concombre</a>
                        <br>
                        <br>
                        <img src="image/concombre.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/pomme" role="button">Pomme de Terre</a>
                        <br>
                        <br>
                        <img src="image/pomme.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/choux" role="button">Choux Pomme</a>
                        <br>
                        <br>
                        <img src="image/imgchoux.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/gombo" role="button">Gombo</a>
                        <br>
                        <br>
                        <img src="image/navet.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/carotte" role="button">Carotte</a>
                        <br>
                        <br>
                        <img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/oignon" role="button">Oignon</a>
                        <br>
                        <br>
                        <img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @if(request('mois')== 'Juin' )
    <marquee>
        <h1> les speculations favorables pour le mois de Juin</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/laitue" role="button">Laitue</a>
                        <br>
                        <br>

                        <img src="image/imglaitue.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/carotte" role="button">Carotte</a>
                        <br>
                        <img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/gombo" role="button">Gombo</a>
                        <br>
                        <br>

                        <img src="image/gombo.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/oignon" role="button">Oignon</a>
                        <br>
                        <br>
                        <img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/concombre" role="button">Concombre</a>
                        <br>
                        <br>

                        <img src="image/concombre.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @if(request('mois')== 'Juillet' )
    <marquee>
        <h1> les speculations favorables pour le mois de Juillet</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/carotte" role="button">Carotte</a>
                        <br>
                        <br>

                        <img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf

                        <a class="btn btn-primary" href="/oignon" role="button">Oignon</a>
                        <br>
                        <br>

                        <img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @if(request('mois')== 'Aout' )
    <marquee>
        <h1> les speculations favorables pour le mois d'Aout</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/carotte" role="button">Carotte</a>
                        <br>
                        <br>

                        <img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>
    </div>





    @endif
    @if(request('mois')== 'Septembre' )
    <marquee>
        <h1> les speculations favorables pour le mois de Septembre</h1>
    </marquee>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">

                        @csrf


                        <a class="btn btn-primary" href="/carotte" role="button">Carotte</a>
                        <br>
                        <br>
                        <img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">


                        <div class="card-body">

                            @csrf

                            <a class="btn btn-primary" href="/oignon" role="button">Oignon</a>
                            <br>
                            <br>
                            <img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif
        @if(request('mois')== 'Octobre' )
        <marquee>
            <h1> les speculations favorables pour le mois d'Octobre</h1>
        </marquee>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">


                        <div class="card-body">

                            @csrf

                            <a class="btn btn-primary" href="/melon" role="button">Melon</a>
                            <br>
                            <br>

                            <img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">


                        <div class="card-body">

                            @csrf

                            <a class="btn btn-primary" href="/choux" role="button">Choux Pomme</a>
                            <br>
                            <br>
                            <img src="image/imgchoux.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif
        @if(request('mois')== 'Novembre' )
        <marquee>
            <h1> les speculations favorables pour le mois de Novembre </h1>
        </marquee>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">


                        <div class="card-body">

                            @csrf

                            <a class="btn btn-primary" href="/melon" role="button">Melon</a>
                            <br>
                            <br>
                            <img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">


                        <div class="card-body">

                            @csrf

                            <a class="btn btn-primary" href="/oignon" role="button">Oignon</a>
                            <br><br>
                            <img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endif
        @if(request('mois')== 'Décembre' )
        <marquee>
            <h1> les speculations favorables pour le mois de Décembre</h1>
        </marquee>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">


                        <div class="card-body">

                            @csrf

                            <a class="btn btn-primary" href="/melon" role="button">Melon</a>
                            <br>
                            <br>
                            <img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="660°" height="437">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif
        @endsection
