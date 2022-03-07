@extends('layouts.app')
@section('content')

<form action="/melon" method="post" class="section">
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
                <div><img src="image/melon.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>
                    <P>
                    <h4>• La plante</h4> <br>

                    Le melon est une culture de la saison sèche et fraîche. Il exige des températures
                    diurnes assez élevées ainsi qu’un bon ensoleillement. Il supporte moins bien les
                    températures nocturnes élevées, une forte humidité de l’air et un temps couvert.
                    L’hivernage provoque donc des baisses de qualité et de rendement.
                    Le melon préfère les sols plutôt lourds avec une bonne humidité mais bien drainé,
                    meubles et profonds ainsi qu’une bonne richesse en matières organiques et éléments
                    fertilisants
                    </P>
                    <p>
                    <h4>•Morphologie </h4><br>
                    *Tiges et feuilles : espèce polymorphes à tiges herbacés rampante ou grimpante
                    grâce à ses vrilles. Les feuilles sont de forme variable avec 3-7 lobes. <br>
                    * Racines : abondantes et traçante ; quelques-unes peuvent descendre à 1m, mais
                    l’essentiel est cantonné à 30-40cm. Dans cette zone les racines sont nombreuses et
                    à croissance rapide. Dans un sol de qualité médiocre, il est nécessaire de faire des
                    trous de plantation aménagés.
                    *Les fleurs sont soit : <br>
                    o Monoïque : la plante porte des fleurs mâles et femelles <br>
                    o Andromonoïque : la plante porte des fleurs males et des fleurs
                    hermaphrodite.<br>
                    o Les fleurs males apparaissent les premières et sont groupées en
                    inflorescence de 3 à 5 fleurs à chaque nœud <br>
                    o Actuellement la plupart des variétés cultivées sont Andromonoïque =
                    melon cantaloup, melon brodés <br>
                    *La taille : a pour but de hâter l’apparition des fleurs femelles, favorise la nouaison et
                    de régulariser la végétation et la taille se fait environ quand la plante a 4 vraies
                    feuilles. On peut par la suite pratiquer une deuxième taille en arrêtant les rameaux
                    secondaires après 3 feuilles, quand la plante a 4 feuilles bien développées. On peut
                    également effectuer une troisième taille de la même manière en arrêtant les rameaux
                    tertiaires (ex : taille 2-3-3). <br>
                    Il existe d’autre types de taille : 2-4-8 ou bien un étêtage seulement, ou bien pas de
                    taille. Attention a la transmission de virus (outils).
                    La taille peut être également être effectuée pour la conduite à plat. Mais avec cette
                    conduite, la densité de plante/m² est plus faible avec plus de pourriture de fruit en
                    contact avec le sol→ paillage
                    <br>
                    </p>
                    <p>
                    <h4> • Classifications des melons</h4>
                    * Les melons Cantaloup = Cucumis melo cantalupensis : taille moyenne,
                    globuleux, côtelé, chair jaune- orangée, parfumée, épiderme fragile, faible
                    résistance au transport, conservation brève. <br>

                    * Melons brodés : Cucumis melo reticulatus = fruits caractérisés par de cote
                    peu marquées avec des lignes blanches et liégeuses comme broderie en
                    relief. Fruit de taille moyenne, resistant au transport, bonne chair variant du
                    vert au rouge orangé. <br>
                    * Melons sucrins : Cucumis melo saccharinus : fruits de taille moyenne,
                    ovoïde ou ovale à épiderme épais, légèrement brodés ; chair très sucré,
                    farineuse, résistance au transport moyenne ; conservation faible. <br>
                    * Melon d’hiver Cucumis.melo inodorus : peau lisse ou rugueuse peu ou pas
                    brodée, à maturité tardive pouvant se conserver un mois et plus. <br>
                    * Melon ananas à chair rouge, melon ananas à chair verte.
                    Ces variétés sont toutes adaptées aux pays chauds et secs.

                    </p>
                    <p>
                    <h4> •Physiologie</h4><br>
                    --La durée du cycle végétatif: <br> * semis- récolte = 100 – 120 jours ; <br> * il faut
                    accomplir 80 jours entre le semis et le premier fruit mur, par la suite, faut
                    prévoir des passages réguliers et presque journaliers pour les récoltes. <br> Le
                    stade précis de la récolte est difficile à déterminer et demande beaucoup
                    d’expériences. <br> On utilise certains critères comme le parfum, le changement
                    de coloration, le fendillement de l’attache du pédoncule sur le fruit, le
                    flétrissement de la feuille à côté du pédoncule… <br>
                    --la lumiére: <br> le melon est insensible à la photopériode, pour l’induction du
                    développement de l’appareil reproducteur, par contre du point de vue
                    croissance, cette dernière croit avec la lumière. <br>
                    En résumé, le melon est une plante exigeante en lumière et capable de
                    supporter un éclairement continu. <br>
                    --La température : le zéro se situe environ 12°C et ce sont les températures
                    supérieures à 15°C qui sont favorables à sa croissance (optimum 28-30°C). <br>
                    Au-delà de 30°C →réduction de la croissance.

                    </p>




                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p>
                <h4>• Variétés</h4><br>
                * Cantaloup : «cantaloup-charentais» à fruits sphériques, à écorce lisse et à chair
                orangée parfumée. <br>
                * «Vedrantais», <br>
                * «Ido» <br>
                * «Cantor <br>
                * Diamex <br>
                * Omega F1 <br>
                * Melon d’hiver : à fruits allongés dont la chair est d’un blanc rosé ou
                verdâtre, très sucrée mais peu parfumée. <br>
                * jaune Canarie <br>
                * Piel de Sapo <br>
                * Brodés : à fruits ronds ou ovales qui présentent en surface un réseau liégeux en
                relief et à chair orangée, parfumée et sucrée. <br>

                * Galia <br>
                * Western Shipper <br>
                * Gulfstream <br>

                * Sprint <br>
                </p>
                <p>
                <h4> •Semis</h4> <br>
                * 1g =30 graines ; durée germinative.= 5-6 ans ; germination 8-10 jours. <br>
                * Effectuer la pré germination des graines <br>
                * semer en place 2 à 3 graines (par poquet) . <br>
                * Démariage= éclaircir à 1 ou 2 plants par poquet environ 3 semaines AS, suivi
                d’un arrosage <br>
                * semer en motte et mettre en place au stade 4 feuilles. Faire le palissage
                vertical (≠ conduite à plat). <br>

                * Greffage possible avec Benincasa cerifer
                </p>
                <p>
                <h4>• Conduite</h4><br>

                * A plat : densité de plantation plus faible, à réserver aux cultures de plein air <br>
                * Vertical : on peut pratiquer un étêtage à la deuxième feuille-->2 ramification <br>

                * Densité de semis : 1,5 – 2,5m X 0,4 – 0,5m <br>

                </p>
                <p>
                <h4> •Fertilisation
                </h4><br>
                - Fond : 30-40T/ha fumier +
                400Kg d’engrais 10-10-20 <br>
                - Entretien: 200-300Kg/ha au moment de la floraison – nouaison.


                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Irrigation</h4><br>
                Qualité de l’eau : max 3gr de sel /litre .Les besoins augmentent avec le
                grossissement du fruit. <br>
                Quand l’eau est salée, le melon est plus délicieux, mais le calibre devient plus petit <br>
                </p>
                <p>
                <h4>
                    • Ennemis

                </h4><br>
                * Les souris : les rongeurs en général qui se nourrissent des graines ; en une nuit, une
                souris peut manger 50 graines. <br>
                * Mouche : Dacus cucurbitae <br>
                * Coccinelle (à 11 et 12 points) et autres coléoptères <br>
                * Les chenilles <br>
                * blanc (Erisiphe polygoni) :
                pour la lutte utiliser des variétés résistantes <br>
                * Cercospriose <br>
                * nématodes à galle <br>
                </p>

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement : 10 à 20T/ha de fruits
                </h4><br>
                La première récolte se situe après environ 2 mois et demi après le semis. <br> Par la
                suite, il faut prévoir des passages réguliers et presque journaliers pour les récoltes. <br>
                Les fruits du type «cantaloup» et «brodé» destinés au marché local sont récoltés 1 à
                2 jours avant la maturité, ceux pour l’exportation (novembre à mai), 3 à 4 jours avant
                la maturité. <br> Le stade précis de la récolte est difficile à déterminer et demande
                beaucoup d’expérience. <br> On utilise certains critères tels que le parfum, le changement
                de coloration, le fendillement de l’attache du pédoncule sur le fruit, le flétrissement de
                la feuille à côté du pédoncule, etc. <br>
                Récoltés trop tôt, les fruits n’arrivent jamais à maturité, et, trop tard, la chair devient
                molle de sorte que le melon devra être consommé immédiatement. <br>
                </p>
            </div>

        </div>
    </div>

    @endsection