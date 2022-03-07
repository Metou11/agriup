@extends('layouts.app')
@section('content')

<form action="/tomate" method="post" class="section">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <br>
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">PRESENTATION</button>
            <br>
            <br>
            <br>
            <br>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">PEPINIERE-SEMIS-PLANTATION</button>
            <br>
            <br>
            <br>
            <br>


            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">ENTRETIEN</button>
            <br>
            <br>
            <br>
            <br>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">RECOLTE</button>

        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div><img src="image/tomate.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>

                    <p>
                    <h4>• la plante</h4><br>
                    La tomate (Lycopersicum esculentum) appartient à la famille des Solanacée, à laquelle
                    appartiennent également le piment, le Jaxatu, le poivron, l’aubergine et la pomme de
                    terre. <br>
                    Elle est originaire d’Amérique centrale et du nord de l’Amérique du sud



                    </p>
                    <P>
                    <h4>• Morphologie</h4> <br>
                    Plante annuelle avec un port buissonnant mais susceptible d’être conduite en plusieurs
                    modes.
                    Les feuilles sont composées, le nombre de folioles est impair,
                    Les fleurs sont bisexuées, inflorescence en grappe ; plante allogame, la floraison
                    débute 50 à 65 jours après semis. <br>

                    Le fruit est une baie, quand le fruit est vert, il contient un alcaloïde nocif : la solanine
                    (qu’on retrouve également dans les tubercules de pomme de terre vert) qui disparaît
                    au fur et à mesure de la maturité. Sa forme est variée : sphérique, elliptique,
                    piriforme… <br>
                    Les graines ont une durée germinative de 4 à 6 ans, la durée de germination de 6 jours
                    dans les conditions normales. On trouve 300 à 400 graines /grammes. <br>
                    Le système racinaire est pivotant, puis se développent des racines secondaires, cette
                    formation de racines secondaires est surtout favorisée par la plantation à racines
                    nues ; avec le semis direct par contre le pivot occupe un rôle plus important (ce qui lui
                    confère une meilleure résistance à la sécheresse) et plus longtemps, si on butte, on
                    obtient des racines adventives au bas de la tige (à l’opposé du piment ou il ne faut
                    jamais enterrer le collet). <br>
                    La tige est herbacée au départ, mais devient de plus en plus lignifiée avec l’âge ; sa
                    longueur varie suivant la variété de 0.3 à 2.5 m et parfois d’avantage.
                    L’inflorescence ne pousse pas à l’aisselle d’une feuille mais entre deux feuilles
                    La croissance de la plante est favorisée par des températures de 15°C pendant la nuit
                    et de 25°C pendant la journée. Cette différence entre la température diurne et nocturne
                    est importante pour la floraison de la tomate. Ainsi, au Sénégal les rendements sont
                    meilleurs en saison sèche, avec des semis d’octobre à mars. <br>
                    La floraison de la tomate est insensible à la longueur du jour, la température optimale
                    pour une bonne nouaison est de 14 à16 degrés. Les températures supérieures à 40
                    degrés sont néfastes. On peut résoudre le problème de la fructification et de la
                    nouaison en pulvérisant sur les fleurs des hormones de nouaison, ce qui favorise la
                    formation de fruits parthénocarpiques. <br>
                    La pulvérisation des hormones procure l’avantage suivant : maturation groupée de
                    tous les fruits d’une inflorescence ; l’inconvénient majeur c’est les risques de
                    déformation des fruits et du feuillage et risque d’attaque par le Botrytis. Les produits
                    commercialisés sur le marché sont entre autre : Tomatone, Trylone, Procarpil. <br>





                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


                <p>
                <h4>• Semis</h4>

                Se fait par semis, en pépinière de préférence, le semis s’effectue entre novembre et
                mars (voire toute l’année) en pépinière sur des lignes espacées de 20 cm à raison de
                2 g de semences par m². Les besoins en semences pour un hectare s’élèvent à 200 -
                400g sur 100 m² de pépinière. Lorsque les plants ont 10 à15cm (25 à 30 jours), on fait
                la mise en place. Il est recommandé de semer les variétés hybrides en motte, godets
                ou alvéoles.

                </p>
                <h4> • Preparation du sol</h4> <br>


                Effectuer les façons culturales : labour, offsettage, billonnage
                Apporter 20 tonnes de fumier bien décomposé /ha à enfouir. <br>
                Avant plantation, on peut effectuer un désherbage chimique (semis direct) ; se fait avec
                le Sencoral (Métribuzine) ; ou le Treflan (Trifluraline) ; les doses varient de 800-
                1200grs MA/ha.
                </p>
                <h4> • Repiquage</h4> <br>

                Les plants peuvent être repiqués après un séjour de 20-30 jours en pépinière, quand
                ils ont 4-6 vraies feuilles (± 15 cm de hauteur). <br>
                Au CDH, les écartements utilisés sont: <br>
                * Lignes doubles : 0,5 mX0.5m avec allées de 1 m entre doubles lignes, cela
                correspond à une densité d’environ 27.000 plants par hectare.
                * Lignes simples 0.75mX0.5m.


                <p>
                <h4> • Fertilisation</h4>
                La fertilisation des plantes pose souvent le problème de la nécessité de trouver le juste
                milieu entre une croissance vigoureuse et une floraison/fructification abondante au
                niveau de la plante. <br>
                Une déficience en azote entraîne en général une floraison/fructification précoce. Le
                phosphore est connu pour son effet sur l’augmentation du nombre de fleurs. Le
                potassium exige souvent des niveaux élevés pour maximiser le taux de nouaison et
                optimiser le processus de mise à fruits. Par ailleurs, un apport excessif d’azote peut
                augmenter la sensibilité de la plante aux attaques parasitaires et à la verse avant
                maturité des graines. <br>
                Le CDH recommande : <br>
                * 20 à 30T/ha de fumier en fond ; <br>
                * 120 unités de N ,120 de P et 240 de K à fractionner en 1 apport de fond et
                4 de couverture à 15, 30, 60 et 80 jours après plantation. <br>
                Pour l’irrigation au goutte à goutte, apporter le DAP (18 46 0) en fond et du Nitrate de
                potasse (13 0 44) en fertigation à raison de 546 kg /ha, à répartir en 60 jours à partir
                du 45éme jour avant récolte(AR). <br>

                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Irrigation </h4><br>
                L’alimentation suffisante et régulière en eau est importante pour l’optimisation du
                rendement d’une culture maraîchère. Cette alimentation ne doit en effet être ni
                insuffisante ni excessive, particulièrement pendant la période allant de la floraison au
                début de la maturation des fruits.
                <p>
                <h4> • Desherbage</h4><br>
                Les mauvaises herbes, surtout les repousses des plantes d’autres espèces ou d’autres
                variétés, sont une source de contamination (pollen et graines indésirables) et
                d’ennemis pour la culture semencière. Le rendement en semences et la valeur
                commerciale des semences peuvent être fortement abaissés suite à une infestation
                de mauvaises herbes. <br>
                Il y a possibilité d’effectuer un désherbage chimique avec Métribuzine, Trifluraline à
                des doses de 0.800 à 1.200kg MA /ha.

                </p>
                < <p>
                    <h4>• Ennemis</h4><br>

                    </p>



            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                * Ocupation du sol : 110-150jours, première récolte 60-80 jours <br>
                * Rendement : 20-50T/ha en saison fraiche ; 10-25T/ha en hivernage



                </p>
            </div>

        </div>
    </div>

    @endsection