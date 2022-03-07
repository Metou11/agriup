@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="min-height: 600px; height: 600px; object-fit: cover "
                            src="https://ideas4development.org/wp-content/uploads/2017/11/Agriculture-Afrique-Climat-e1516631000580.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="min-height: 600px; height: 600px; object-fit: cover"
                            src="https://wathi.org/wp-content/uploads/2017/10/Agriculture-au-Senegal.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="min-height: 600px; height: 600px; object-fit: cover"
                            src="https://ideas4development.org/wp-content/uploads/2017/11/Agriculture-Afrique-Climat-e1516631000580.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>
                        <marquee class="text-success">
                            Bienvenue sur {{ config('app.name') }}, votre première plateforme de conseils culture maraichère et en
                        arboriculture...
                        </marquee>

                    </h3>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Contexte
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            La production agricole joue un rôle primordial dans l’alimentation. L’offre des producteurs
                            n’est pas suffisante pour répondre à la demande de la population sénégalaise. Une personne
                            souhaitant intégrer le secteur agricole peut utiliser les TIC, pour des utilisations très
                            diverses sans une connaissance préalable de ce domaine. En effet, s’il a les bons conseils,
                            il peut gagner un temps considérable et optimiser le rendement de ses parcelles grâce à une
                            application pour l’aide à la prise de décision dans le secteur agricole.

                            De ce fait, nous comptons mettre en place cette application qui sera une technologie
                            d’information et de communication (TIC) dans le but de révolutionner la production agricole.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseTwo">
                            PROBLEMATIQUE
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            Nous avons comme problématique de lutter contre la dépendance alimentaire extérieure et de
                            participer à créer des activités génératrices de Ainsi, L’intégration de TIC dans le
                            processus de production agricole à la gestion et à la prise de décisions, nous ont motivé à
                            prendre nos connaissances acquises en informatique pour le déployer dans le domaine de
                            l’agriculture.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseThree">
                            OBJECTIF
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            Notre objectif général est de satisfaire tous les besoins alimentaires par la production
                            nationale en initiant les entrepreneurs, les investisseurs, les chômeurs,…à promouvoir
                            l’autosuffisance alimentaire </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseFour">
                            RESULTATS ATTENDUS
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            Nous souhaitons motiver beaucoup plus de personnes (entrepreneurs, chômeurs, ...) qui ne
                            sont pas forcément agronome de formation à contribuer à l’autosuffisance alimentaire. Cela
                            grâce à :
                            la création d’une application de conseil agricole qui permettra de guider les choix
                            culturaux et accompagner l'exploitant tout au long de la campagne agricole. L’application
                            permettra aussi aux non-initiés d’apprendre diverses techniques utilisées dans le domaine de
                            l’agriculture mais aussi divers itinéraires techniques.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
