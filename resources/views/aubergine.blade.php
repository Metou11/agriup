@extends('layouts.app')
@section('content')

<form action="/aubergine" method="post" class="section">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <br>
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">PRESENTATION</button>
            <br>
            <br>
            <br>
            <br>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">PEPINIERE ET PLANTATION</button>
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
                <div><img src="image/imgaubergine.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>
                    <P>
                    <h4>• La plante</h4> <br>

                    L’aubergine est une plante autogame. Le système racinaire est du type traçant,
                    cependant certaines racines peuvent descendre jusqu'à 80cm. <br>
                    *Fruit violet, plante vivace mais sont le plus cultivés en annuel, plante
                    buissonnante, pouvant atteindre 0,5 - 1,20 m ; on peut les palisser jusqu'à 2 m
                    (hollande).
                    * Les tiges sont dressées, ramifiées, couvertes de poils et épineuse, elles sont plus
                    ligneuses que celle de la tomate.
                    *Les feuilles sont simples, oblongues, allongées, avec souvent des aiguillons sur
                    les nervures. Les fruits atteignent 8 a 15 cm de long, fleurs violettes, parfois
                    blanches, elles sont assez semblables a celle de la pomme de terre. Les fleurs sont
                    seules et à l’aisselle d’une feuille, elle est du type 5.
                    * Les fruits sont des baies charnues, lisse, plus ou moins grosses, leur forme est très
                    variable : ronde, ovoïde, allongée, généralement violette, mais il existe une variété
                    a fruit blanc.
                    * Le pédoncule du fruit est le plus souvent épineux. A maturité complète, la teinte
                    violette disparaît, →devient jaunâtre. Les graines sont rondes, plates, on compte
                    150- 200g /gramme. La durée germinative est de 3 à 4 ans
                    </P>
                    <p>
                    <h4>• Physilologie</h4><br>
                    * Lumière : c’est une espèce de jour neutre, mais on peut dire que c’est une
                    espèce de jours longs car la floraison est meilleure en jours longs.
                    * Température: plante assez exigeante en température (plus que la tomate), elle
                    commence à se développer lorsque la température dépasse 21°C ; la nuit la
                    température doit baisser de 5 à 6°C, ceci facilite la migration de la sève élaborée.
                    * La germination débute à une température du sol d’environ 12°C (optimum 15°C,
                    maximum 35°C) une germination lente ↓ la précocité et la productivité.
                    * La meilleure production s’obtient en période chaude suivi d’une baisse nocturne
                    de température.

                    </p>
                    <p>
                    <h4> • Exigence édaphique édaphique</h4>
                    L’aubergine s’adapte a différents sols aussi bien acide (5,5 – 6) que calcaire (7,5 – 8),
                    elle peut se contenter d’un sol moins profond que la tomate (car son système racinaire
                    est traçant)

                    </p>
                    <p>
                    <h4>• Eau</h4>
                    <br>
                    Plante exigeante en eau surtout a partir du grossissement des fruits, la plante répond
                    fortement a l’excès et au manque d’eau ; <br>
                    les irrégularités d’irrigation → fruits éclatés.</p>
                    <p>
                    <h4>• Salinité</h4>
                    <br>
                    Elle est plus sensible a l’eau salée que la tomate ; une eau saumâtre augmente
                    l’amertume du fruit. <br>
                    La plante réagit bien aux irrigations localisées ; elle est sensible aux vents car les
                    feuilles sont larges et offrent une plus grande surface à l’évapotranspiration.</p>



                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p>
                <h4>• Variétés</h4><br>
                * Violette longue
                * Forida market
                * F1 Classic
                * F1 Adama
                * Black beauty
                * F1 Obale
                * Zébrina
                * Kalenda F1
                * Barbentane
                <p>
                <h4> • Multiplication</h4> <br>

                Par semis : 1g donne→200 graines ; durée de la pépinière 45-50 jours
                Il faut 300-400 grs/ha
                </p>
                <p>
                <h4> • Fertilisation</h4>
                * Fertilisation de fond : 20 – 30 T/ha matière organique
                * Fertilisation minérale : 125N ; 125P ; 250K dont un quart au fond et les trois
                quart en couverture aux 40, 60, et 80 éme jour A.R.
                </p>
                <p>
                <h4>• Plantation</h4><br>
                *À racines nues→ humecter le sol avant arrachage : sélectionner les bonnes
                plantes. Planter l’après- midi (moins chaud).
                *Ecartement 0,5 X 0,75 (en lignes doubles espacées de 0.5m et 0.75 sur la ligne)
                *En motte ou en sachet → pas de choc de reprise

                </p>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Entretien</h4><br>
                * Désherbage :
                * Chimique en pré plantation avec les désherbant chimiques de la pomme de terre:
                Sencoral (MA=Métribuzine) <br>
                * Manuel <br>
                * buttage des plantes→ départ des racines adventives <br>
                * soins culturaux
                </p>

                <p>
                <h4>• Ennemis</h4><br>
                * Chenilles qui dévorent les feuilles <br>
                * Jass ides : les feuilles jaunissent sur les bords, brunissent et se nécrosent : <br>
                * Acariens : déformation des feuilles, jaunissement et chute des feuilles, dégâts
                plus importantes en hivernage→ Malathion, Spinosad, Lambdacyhalothrine,
                Acétamipride, Profénofos <br>
                * La rouille : taches jaunes arrondies à la face supérieur ; pustule orange à la face
                inférieure→Manèbe, Mancozèbe. <br>
                * Nématodes à galles : mauvais développement des plantes et nodosité sur les
                racines → la rotation culturale, nématicides : Némacur, Oxamyl, Ethoprophos
                (Mocap) etc <br>
                </p>

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement : 25-40T/ha
                </h4><br>
                • la première récolte → environ 2 mois AR et s’étale sur une période de 2 à 4
                mois.
                • Couper le fruit avec le pédoncule
                • Rendement : 25- 40 T/ha
                </p>
            </div>

        </div>
    </div>

    @endsection