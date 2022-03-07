@extends('layouts.app')
@section('content')

<form action="/carotte" method="post" class="section">
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
                <div><img src="image/imgcarotte.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>
                    <P>
                    <h4>• La plante</h4> <br>

                    Elle serait originaire d’Asie occidentale. Plante bisannuelle pouvant être cultivé en
                    annuelle qui accumule dans ses racines ses réserves et dont la couleur est
                    généralement rouge orangée, grâce a un pigment, le carotène. <br>
                    La carotte est une culture qui préfère les températures basses de la saison sèche. Les
                    températures élevées provoquent une baisse de rendement. <br>
                    Le feuillage a une grande importance car elle est indispensable au bon développement
                    de la racine et doit avoir une masse suffisante si on veut avoir des rendements élevés
                    d’où la nécessité de la protection contre les ennemis. <br>
                    Un excès de feuillage est gênant car difficulté pour la récolte et peut entrainer une
                    pourriture de racines ; on cherche des variétés à port dressé pour faciliter la récolte. <br>
                    Peut-être cultivée en toute saison en altitude, et en saison fraîche en plaine. La carotte
                    est riche en vitamine A, B, C, plante allogame
                    </P>
                    <p>
                    <h4>• Physilologie</h4><br>
                    * Exigences climatiques : la température optimale de croissance se situe entre 15-
                    20°C, et une préférence pour les climats doux. <br>
                    * Exigence édaphique : sol profond, ameubli profondément, non caillouteux, et non
                    battant. pH : 6,5-7 <br>
                    * Préparation du sol :
                    La carotte est un légume racine largement tributaire des caractéristiques du sol,
                    elle préfère les sols sablonneux → le sol doit être ameubli profondément 25-
                    30 cm, dans lesquels la croissance des racines n’est entravée par aucun
                    obstacle. <br>
                    * La matière organique doit être bien décomposée afin d’éviter la production de
                    racines fourchues et déformées. <br>
                    * La carotte ne supporte ni la salinité du sol, ni celle de l’eau d’arrosage.

                    </p>




                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p>
                <h4>• Variétés</h4><br>

                - Chantenay <br>
                - Nantaise améliorée <br>
                - New Kuroda <br>
                - F1 japon cross F1 <br>
                - F1 Amazonia <br>
                - Manga <br>
                - Malibu <br>
                - Bahia <br>

                - Chantenay <br>
                - Nantaise améliorée <br>
                - New Kuroda <br>
                - F1 japon cross F1 <br>
                - F1 Amazonia <br>
                - Manga <br>
                - Malibu <br>
                - Bahia <br>

                - New Kuroda <br>
                - Amazonia <br>
                - Malibu, Manga <br>
                - Nantaise améliorée <br>
                <p>
                <h4> • Multiplication</h4> <br>

                * Se fait en semis direct, 1gramme contient 400-500 graines, la faculté germinative
                est assez longue, elle tend vers 10 ans. <br> Le temps de germination peut varier de
                10 à 20 jours suivant la saison. <br>
                * on doit les semer en place ; <br> les plants répliqués donnent des racines de forme
                bizarre, fourchues, en zigzag. <br> C’est en effet la racine principale pivotante qui
                tubérise. <br>
                * La racine se déchausse souvent et devient un peu verdâtre (caractère déprécié)
                →rebutage <br>
                * Le semis peut être effectué en billon ou en banquette large de 60cm <br>
                * On prévoit 3-6 kg de semences/ha <br>
                * Ecartements : 0,2 – 0,3 m entre les lignes.
                </p>
                <p>
                <h4> • Fertilisation</h4>
                * Fond : 10-20 Tonnes/ha de matière organique bien décomposée ; et 400kg/ha
                d’engrais minéral 10-10-20. <br>
                * Couverture : 300kg/ha d’engrais minéral 10-10-20 à 20 et 40 jours après semis.
                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Entretien</h4><br>
                * éviter le collet vert
                <br>
                * éviter les racines fourchues ou déformées, qui peuvent être dues à un sol mal
                préparé ou mal choisi, ou fumure organique trop fraîche <br>
                * l’éclatement du a l’irrégularité des irrigations, surtout si les racines arrivent en fin
                de grossissement <br>
                * la couleur : pour obtenir une belle couleur →espacement régulier des racines <br>
                * Assolement : <br>
                - Les parcelles précédentes qui ont porté des ombellifères, des haricots, voire même
                des pois sont à éliminer (Rhizoctonia) <br>
                - Respecter une rotation de 2 à 3 ans au moins, sinon risque d’avoir des racines de
                mauvaise qualité <br>
                * Environ à 1 mois après semis, éclaircir à 20-30 plant/m² sur la ligne (3-5 cm entre
                les plants), puis faire suivre d’un arrosage
                </p>

                <p>
                <h4>• Ennemis</h4><br>

                <div><img src="image/ennemis.png" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                * 15-40T/ha (avec une moyenne de 20T/ha), avec les rendements les plus élevés
                en saison fraiches; <br>
                * durée du cycle = 100-120 jours <br>
                * La conservation : les carotte peuvent être conservées jusqu’à plusieurs semaine
                dans un endroit frais. <br>
                * Transformation : séchage de rondelles au soleil <br>

                </p>
            </div>

        </div>
    </div>

    @endsection