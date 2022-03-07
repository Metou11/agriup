@extends('layouts.app')
@section('content')

<form action="/piment" method="post" class="section">
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
                <div><img src="image/piment.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>

                    <p>
                    <h4>• la plante</h4><br>
                    La culture des piments est très importante au Sénégal.
                    Les piments sont originaires d’Amérique tropical : Pérou, Brésil, Chili.
                    C’est au 16éme siècle que le piment a été introduit en Espagne, et au départ on l’a
                    utilisé en Europe comme une plante médicinale, puis comme plante ornementale.




                    </p>
                    <P>
                    <h4> • Morphologie </h4> <br>
                    Le port est buissonnant, la hauteur varie de 0.5 à1métre (voire 1.5 avec palissage en
                    serre). <br>
                    La croissance est déterminée, la tige principale se termine par une fleur.
                    Chez le piment l’autogamie est de règle, mais le taux d’allogamie peut atteindre 10 à
                    20 % chez les variétés à gros fruits. <br>
                    Le fruit est une baie creuse qui possède une structure analogue à la tomate. Il est vert
                    et prend sa couleur définitive à maturité complète. <br>
                    Il contient de la vitamine C, du carotène et de la provitamine A qui agit sur la rétine.
                    La saveur piquante de certaine variété est due à un alcaloïde « la capsaïcine »
                    (C18H27NO3) très irritante et brûlante, et la forte concentration se situe au niveau des
                    graines. <br>
                    Les graines sont plates et arrondies, nous avons 150-200 graines /gramme, la durée
                    germinative est de 3-4 ans.

                    </P>
                    <P>
                    <h4>• Le climat</h4> <br>


                    Plante exigeante à la chaleur ; il faut une température moyenne de 24°C, au-dessous
                    de 15 °C, la fructification est mauvaise avec un zéro végétatif aux alentours de 10-
                    12°C. <br>
                    Au-dessus de 35 °, cette fructification est faible ou nulle surtout si le vent est sec.
                    Les variétés à petits fruits résistent mieux aux températures élevées aux différents
                    stades. <br>


                    </P>
                    <P>
                    <h4>• L'eau</h4>
                    <br>le piment peut résister jusqu’à 3 grammes /litre. Le piment est un peu moins
                    exigent en eau que la tomate.

                    </P>
                    <p>
                    <h4> • Le sol </h4> <br>
                    le piment se plait bien aux sols à structure grumeleuse, sablo limoneux, riche
                    en humus et drainant bien, car il craint l’asphyxie racinaire. <br>
                    Le système racinaire est fasciculé et n’émet pas de racines adventives ; ainsi il ne faut
                    pas enterrer le collet de la plante du fait des risques de pourritures.
                    </p>




                    <p>
                    <h4> • La germination</h4> <br>
                    Le piment est plus exigent à la chaleur que la tomate, la germination a lieu à une
                    température du sol comprise entre 24 et 26°C, la levée entre 8-10 jours. Elle peut
                    commencer à 12 °C (germination lente, plante chétive) et ralentir vers 35-45°C</p>


                    </p>
                    <p>
                    <h4> • La floraison</h4>
                    <br>
                    Plante de jours neutres, la première fleur apparaît au stade 10-12 feuilles. La
                    perceptibilité des fleurs est de 5 jours</p>




                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <p>
                <h4> • Variétés</h4><br>


                * Safi <br>
                * Salomon <br>
                * Malika <br>
                * Red chili <br>
                * Sucette de Provence <br>
                * Tyson <br>
                * Big Sun <br>

                <br>
                </p>

                <h4> • Semis</h4> <br>


                Il faut environ 400 grammes de semences pour emblaver 1 ha de culture
                Durée de la pépinière : 45-60 jours

                </p>

                <p>
                <h4> • Fertilisation</h4> <br>
                * Fond : 15-20T/Ha de matière organique bien décomposée +300 kg/ha d’engrais 10-
                10-20 <br>
                * Couverture : 150kg/ ha d’engrais 10-10-20 tous les 20 jours après repiquage (5 à 6
                fois)

                </p>
                <p>
                <h4> • Plantation</h4> <br>
                Planter en lignes doubles : 0.75X0.75 (avec une allée d’un mètre) ; <br>
                laisser le collet légèrement au-dessus du niveau du sol.


                </p>


            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <p>
                <h4>• Ennemis</h4><br>

                * Mouche des fruits : les asticot se nourrissent des fruits, lesquels
                pourrissent et tombent <br>

                * Chenilles : attaquent les feuilles, fruits et bourgeons <br>
                * Pucerons : présents sur les feuilles et sont vecteurs de virus <br></p>
                <p>
                <h4>• Lutte</h4><br>
                * Ulitiser des insecticides : Deltaméthrine, Spinosad, Cypermethrine, Fenitrothion,
                chlorpyrifos-ethyl (Dusban) <br>
                * Utilisation de nématicides : Ethoprophos (Mocap), Oxamyl


            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                Il faut compter environ 120 à 150 jours entre le semis et la maturité des fruits ; à partir
                de la plantation, il faut 65 à 90 jours pour avoir les premiers fruits.
                Généralement on conseille d’effectuer la récolte au stade vert du fruit, ce qui augmente
                la récolte de la plante de 40% environ et évite l’épuisement de la plante par le
                développement des graines. <br>
                Les rendements sont estimés entre 8-16 voire 20 T/ha, il est conseillé de couper le
                fruit avec le pédoncule quand il est mur et de couleur uniform



                </p>
            </div>

        </div>
    </div>

    @endsection