@extends('layouts.app')
@section('content')

<form action="/chou" method="post" class="section">
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
                <div><img src="image/imgchoux.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>
                    <P>
                    <h4>• La plante</h4> <br>

                    C’est un légume des régions tempérées : France, Angleterre, Danemark, ou il
                    pousse à l’état spontané. <br>
                    Préférence pour les climats doux et humides, peut résister à des températures
                    très basses, les températures élevées réduisent le poids, le calibre et la
                    fermeté des pommes. <br> Ils redoutent surtout la sécheresse et l’air sec, et ne
                    peut donc être cultivé en sec sous nos climats. <br>
                    </P>
                    <p>
                    <h4>• Conditions edaphiques</h4><br>
                    Les terres argileuses sont les plus favorables. Les sols argilo limoneux
                    donnent une certaine précocité. <br> Les choux redoutent les terres acides,
                    ils sont sensibles au sel : 2-2.5 grs/l. <br>
                    Une terre acide favorise la hernie du chou. <br> En hivernage, les textures
                    légères conviendraient mieux (car redoute l’asphyxie).

                    </p>




                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <h4> • Multiplication</h4> <br>

                - Exclusivement par semis, 1gr de graines→ 350-400 graines ; durée germinative :

                5-6 ans. <br>
                - La température optimale de germination : 10-20°C. <br>
                - Le semis se fait en pépinière à faible densité sans excès de fumure azotée, éviter
                les plants borgnes. <br>
                - Repiquer en 3 lignes jumelées distantes de 0.35-0.40mX0.35-0.40m ; pratiquer si
                nécessaire l’habillage pour éviter de retourner les racines. <br>

                - Quantité de semences : 700grs/ha <br>
                - Plantation : lors de la plantation, effectuer un triage, seuls les plants vigoureux
                donneront de beaux plants ; elle est effectué quand la pépinière est âgées de 25-
                35 jours (5-6 feuilles) <br>
                </p>
                <p>
                <h4> • Fertilisation</h4>
                * Les choux sont très exigeants à l’égard des apports d’azote, de
                potasse, et à la matière organique (30-40 T/ha). <br>
                * Fumure minérale : (CDH) <br>
                - Fond : 250-300 kg/ha d’engrais 10-10-20 <br>
                - Couverture : 200 kg/ha d’engrais 10-10-20 à 20 et 35
                jours après plantation (AP). <br>

                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Entretien</h4><br>
                - Bien effectuer les opérations culturales : sarclo binages en début de culture <br>
                - Irrigations importantes surtout au stade développement de la pomme

                </p>

                <p>
                <h4>• Ennemis</h4><br>
                * ravageurs
                - pucerons
                - Chenilles
                - Teigne des crucifères
                - Le Borer du chou
                - Le vers gris
                * maladies
                - Mildiou
                - Bactérioses (nervations noires)
                - Alternariose
                - Pourriture du collet : Plasmodiophora brassicae


            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                * Le cycle est de 80-100 jours (60 en hivernage) ; <br>
                la récolte est échelonnée <br>
                * Couper les pommes au couteau et garder 3 feuilles ouvertes→ protection au
                cours des manipulations <br>
                * Rendements : 25-45T/ha et 10-20T/ha en hivernage
                </p>
            </div>

        </div>
    </div>

    @endsection