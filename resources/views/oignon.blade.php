@extends('layouts.app')
@section('content')

<form action="/oignon" method="post" class="section">
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
                <div><img src="image/oignon.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>
                    <P>
                    <h4>• La plante</h4> <br>

                    L’oignon (Allium cepa L) appartient à la famille des Liliaceae, à laquelle
                    appartiennent également le poireau, l’ail et l’échalote. La caractéristique de cette
                    famille est la présence d’un bulbe formé par le renflement plus ou moins important de
                    la base des feuilles. Ce bulbe sert d’organe de réserve.
                    L’oignon est l’espèce la plus cultivée du globe, comme condiment et comme légume ;
                    il est originaire des climats tempérés (Asie centrale).
                    Plante vivace car bulbeuse, le bulbe est de grosseur et de forme variable. La tige est
                    courte (donc pas apparente) le plus souvent réduit à un plateau qui va porter un
                    méristème.
                    </P>
                    <p>
                    <h4>•La floraison</h4><br>
                    L’inflorescence est une ombelle, la fleur porte 6 étamines qui s’ouvrent 1-2 jours avant
                    que le stigmate ne soit réceptif (protandrie).Souvent la pollinisation est entomophile
                    car plante allogame et généralement la fécondation se fait à 80%.
                    -En culture maraîchère l’oignon est une plante annuelle quelquefois bisannuelle
                    -En culture grainière l’oignon est une plante bisannuelle quelquefois trisannuelle.
                    -En culture normale on peut compter de 120 à 190 jours du semis à la récolte.</p>
                    <p>
                    <h4>• Exigences climatiques</h4><br>
                    La végétation est dépendante de la longueur du jour et de la température ; d’où la
                    nécessité de choisir des variétés bien adaptées à la zone.
                    </p>
                    <p>
                    <h4>• Le sol</h4><br>
                    Plusieurs types de sol se ressuyant bien avec un pH supérieur à 6, conviennent à la
                    culture de l’oignon.</p>
                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p>
                <h4>• Variétés</h4><br>
                *Culture hâtive (primeur) : semis octobre : Violet de Galmi, Texas early grano,
                Noflaye, Goldor, F1 Gandiol, Orient, Red Passion, Goudamy.
                <br>*Culture de pleine saison : semis novembre-décembre : Violet de Galmi, Texas
                early grano, Orient, Noflaye, Goldor, Gandiol F1, Red Passion, Goudamy,
                Mercedes, Safari.
                <br>
                *Culture tardive et semi tardive (arrière-saison) : semis en pépinière en janvier-février : Red créole, Yaakar, Rouge d’Amposta, Jaune espagnol, Gao, Violet de
                Galmi, Orient F1, Gandiol F1 ; Prema 178, alizé.
                </p>
                <p>
                <h4> •Semis</h4> <br>
                Il est possible d’effectuer un semis direct. Il s’effectue en bandes de 5 à 6 lignes
                espacées de 20 à 25 cm à raison de 5 à 6 kg de semences par hectare. <br> On obtient
                des résultats optimaux avec des semis en mi-janvier. <br> L’inconvénient d’un semis direct
                est la concurrence des mauvaises herbes au début de la culture. <br> Il est quasi
                indispensable de prévoir un traitement herbicide sélectif de prélevée ou un traitement
                non sélectif de pré semis. <br>
                Il est plus avantageux d’effectuer un semis en pépinière (4à 6 kg/ha) au lieu d’un semis
                direct. <br>
                Les avantages sont : une économie en eau, engrais et main d’œuvre, mais le
                cycle est légèrement allongé. <br>
                Dans tous les cas, disposer de graines fraîches, si possible de moins de 2 ans.
                </p>



                <p>
                <h4>•Repiquage</h4><br>
                Le repiquage s’effectue entre 45 et 50 jours après semis.
                <br> Le terrain est préparé en
                bandes 1-1.2m de large, avec des passages de 50 cm.
                <br> Les écartements de plantation
                sont 20 x 10 cm.
                </p>
                <p>
                <h4> •Fertilisation
                </h4><br>
                Comme toutes les plantes bulbeuses, l’oignon redoute la fumure organique fraîche.
                <br>

                Au Sénégal, on recommande d’apporter 10-20 T/ha de matière organique bien
                décomposée.
                <br> Concernant la fertilisation minérale, pour un rendement de 30 T/ha, on recommande : <br>
                * 250 kg d’engrais 10-10-20 en fond
                * 250 kg/ha en couverture aux 20, 40 et 60 éme jour après repiquage.

                </p>

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Irrigation</h4><br>
                Pendant toute la culture d’oignon, il faut apporter 5 mm d’eau par jour.
                En pépinière et jusqu’à 30 jours après repiquage, des apports journaliers sont nécessaires.
                Au début de la bulbaison, les fréquences d’irrigations peuvent être réduites à une fois par 2
                jours à raison de 10 mm/apport.
                Quand les oignons approchent de la maturité, c’est-à-dire quand 30 % des plants ont le
                feuillage couché, on arrête l’irrigation.
                </p>
                <p>
                <h4>
                    • Désherbage

                </h4><br>
                L’oignon est très sensible aux adventices, surtout aux premiers mois de culture. Il est
                possible d’utiliser des désherbants chimiques :
                * Le Propachlore en prélevé
                * Le Chlorprophame en post levée
                * Oxyfluorfène 240 g/l en post levée
                * Haloxyfop-R méthyl (104g /l) en post levée.
                </p>
                <p>
                <h4>• Production de bulbilles</h4><br>
                Il est possible de produire des oignons en culture hâtive à partir de bulbilles produites
                auparavant. <br>
                Les graines sont semées en fin mars - avril pour une récolte 70-80 jours plus tard à
                maturité complète. <br> Arrêter les irrigations quand les feuilles se couchent. les conserver
                dans un endroit frais et sec. <br>

                Replanter les bulbilles en octobre suivant pour une récolte 90-100 jours plus tard. <br>
                La variété Violet de Galmi est très bien adaptée à cette pratique. <br>
                NB : protection phytosanitaire contre les Thrips, enlever les
                bulbilles pourries.
                </p>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement : 20-50T/ha
                </h4><br>
                Les arrosages sont arrêtés quand 30 % des plantes ont les feuilles couchées. La
                récolte s’effectue 10 à 15 jours plus tard, lorsque les feuilles sont au 2/3 séchées.
                <br> Elle
                se fait à la main et avec précaution pour éviter les blessures. Le séchage peut
                continuer sur le champ pendant 1 à 2 jours après l’arrachage.
                <br>Le feuillage est coupé à
                5 cm du collet
                </p>
            </div>

        </div>
    </div>

    @endsection