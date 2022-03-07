@extends('layouts.app')
@section('content')

<form action="/concombre" method="post" class="section">
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
                <div><img src="image/concombre.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>
                    <P>
                    <h4>• Morphologie</h4> <br>

                    * Plante rampante, herbacée, la tige peut atteindre 2-3 mètres <br>
                    * Les racines sont traçantes, très fines, il y’a parfois formation de racines adventives ;<br>
                    * l’enracinement est d’autant plus profond que le sol est humifère. <br>
                    * La tige du type indéterminée, flexible, et recouverte de poils ; elle est faible au stade
                    juvénile mais à partir du 30éme jour, son élongation est très rapide (2cm/jour) et 10
                    cm/jour à partir du 50éme jour. <br>
                    * On peut récolter des fruits 2 mois après semis <br>
                    * La tige est très sensible aux blessures ; si elles sont nombreuses, elles peuvent
                    entrainer la mort de la plante <br>
                    * Il ya formation de rameaux secondaires à 25-35 jours sur l’axe principale et de
                    tertiaires sur ces secondaires après 10-15 jours. Les feuilles sont pétiolées cordiformes
                    à 5 lobes et sont souvent couverts de poils raides ; la face supérieure est vert foncée, la
                    face inferieure grisâtre. <br>
                    * Cycle cultural : 85-120 jours (saison fraîche) et 65-75 jours en hivernage

                    </P>
                    <p>
                    <h4>• la fleur</h4><br>
                    Plante monoïque, (porte des fleurs males et des fleurs femelles sur la même plante),
                    certaines variétés sont Andromonoïque (fleurs males et hermaphrodites sur la même
                    plante) ; les fleurs males apparaissent les premières sur l’axe principale, à l’aisselle
                    des feuilles ; les femelles apparaissent 3 semaines après. <br>
                    L’ovaire est infère. Plante allogame, la fécondation est favorisée par le vent, insecte,
                    ce qui complique la sélection variétale (descendance hétérogène)


                    </p>
                    <p>
                    <h4> • les fruits</h4><br>
                    Ils sont allongés, charnus, lisses ou recouverts de petits mamelons ; le fruit est
                    normalement verdâtre à maturité, d’où il est consommable. <br>
                    Les graines sont plates 35-45 graines /gramme.
                    La durée germinative est de 5 ans. <br>
                    Le cornichon ressemble au concombre, mais le fruit est plus petit. Les cornichons sont
                    obtenus avec des variétés de concombre particulièrement fertile, dont on cueille les
                    fruits très jeunes pour les confire dans le vinaigre. <br>
                    Les concombres sont très recherchés en saison chaude car c’est un légume fruit
                    rafraîchissant.
                    </p>
                    <p>
                    <h4> • La température</h4>
                    <br>


                    La germination exige une température minimum de 11-12°, mais pour une bonne
                    germination, il faut 18-20°. Elle devient faible à 30-35°. La levée a lieu à 6-8 jours
                    La température agit également sur la floraison. <br> les températures basses sont
                    féminisantes, alors que les températures élevées sont masculinisantes.
                    L’optimum de fécondation se situe à 18-20°
                    <br></p>

                    <p>
                    <h4> • La lumiére</h4>
                    <br>


                    Le concombre pousse, fleurie et fructifie en jours courts de 12heures.En jours longs,
                    effets masculisants et en jours courts la plante est féminisée
                    <br></p>
                    <p>
                    <h4> • Fructification</h4> <br>


                    La fécondation est favorisée par des températures de 18-20° ; une luminosité faible
                    favorise une tendance à la parthénocarpie.
                    </p>
                    <p>
                    <h4> • Le sol</h4> <br>



                    * Sol léger, riche, très perméable surtout si on recherche la précocité. <br>
                    * pH : 6.5-7.5

                    </p>



                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <p>
                <h4> • Variétés</h4><br>

                * Poinsett <br>
                * Marketier <br>
                * Basma F1 <br>
                * Gynial <br>
                * F1 Breso <br>
                * Tokyo F1 <br>
                </p>

                <h4> • Multiplication</h4> <br>


                * Semis direct en place, ou en motte/alvéoles (à repiquer à 20-25 jours) <br>
                Semer de septembre à mars pour la production de saison fraiche ; et d’avril à aout pour
                la production d’hivernage. <br>
                * En poquet 2-3 graines/trou ; 50-60 cm X1m (en culture tuteurée) <br>
                * Enracinement superficiel, les éléments fertilisants doivent être à sa
                disposition dans les 15-20 premiers centimètres.
                </p>

                <p>
                <h4> • Fertilisation</h4>
                * Fond : 30-40 T/ha de matière organique bien décomposée+
                400 kg/ha d’engrais 10-10-20 <br>
                * Entretien : 200kg/ha de 10-10-20 à 4,6 et 8 semaines
                Au total 100-100-200

                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Irrigation </h4><br>
                * Elle doit être la plus constante possible, dans la zone des premiers 20 cm . <br>
                l’humidité du sol ne doit pas descendre en dessous de 50% de la capacité au champ
                d’où la nécessité d’effectuer arrosages fréquents. <br>
                * Le manque d’eau provoque la formation de fruits amers pour certaines variétés (du
                fait d’un alcaloïde, la Cucurbitacine) <br>
                * A partir de 2grs/l le concombre n’est plus à l’aise
                <p>
                <h4> • Entretien</h4><br>
                * Le tuteurage facilite la récolte et assure une meilleure protection phytosanitaire

                </p>
                < <p>
                    <h4>• Ennemis</h4><br>
                    * Coléoptères <br>
                    * Pucerons <br>
                    * Lépidoptères (pyrale) <br>
                    * La mouche des cucurbitacées <br>
                    * La mosaïque des cucurbitacées <br>
                    * Mildiou : Pseudoperonospora cubensis <br>
                    * Oïdium <br>
                    * Fusarium solani <br>

                    * Le flétrissement bactérien : Ervinia trachéiphila (maladie vasculaire,
                    flétrissement et mort) <br>
                    * Nématodes <br>
                    </p>
                    <p>
                    <h4>• Lutte</h4> <br>

                    * Deltaméthrine <br>
                    * Lambdacyalothrine <br>
                    * Profénofos <br>
                    * Acetamipride <br>
                    * Cypermethrine <br>
                    * Chlorpyriphos-ethyl <br>
                    * Conquest <br>
                    * Spinosad (insecticide naturel, issue d’une bactérie, Saccharopolyspora Spinosa) <br>


                    </p>



            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                * Saison fraîche : 30-50 T/ha
                * Hivernage : 20-40T/ha
                * Récolter 2-3 fois/semaine
                * Les premières récolte à 40-55 jours ; couper les fruits avec 1 cm de pédoncule
                quand ils sont vert (donc avant la maturité et avant que les graines ne soient
                différenciées) quand ils ont une longueur de 15-20 cm et un diamètre de 4-5 cm.
                </p>
            </div>

        </div>
    </div>

    @endsection