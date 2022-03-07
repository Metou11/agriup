@extends('layouts.app')
@section('content')

<form action="/gombo" method="post" class="section">
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
                <div><img src="image/gombos.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>

                    <p>
                    <h4>• la plante</h4><br>
                    Le gombo est une plante à croissance rapide à haute température et bien adaptés aux
                    étés tropicaux, cette croissance est ralentie lorsque les températures nocturnes
                    descendent autour de 15 °C (croissance ralentie en période fraîche de décembre à
                    février). <br>
                    La tige de la plante adulte est robuste, de consistance fibreuse et mucilagineuse à la
                    fois. Les feuilles sont alternes, poilues ; les fleurs jaunes à cœur brun.
                    Le fruit est une capsule conique plus ou moins allongé suivant les variétés, de couleur
                    verte presque blanchâtre ou rougeâtre. A maturité, il devient fibreux et s’ouvre par 5
                    fentes longitudinales laissant apparaître 5 files de graines ; il y’a environ 30 à 60
                    graines par fruit. <br>
                    Pour la consommation, on conseille la cueillette des fruits immatures mesurant 10 à
                    15 cm de long, les graines encore blanches. A ce stade les fibres ne sont pas encore
                    différenciées et le jeune fruit après cuisson est de consistance mucilagineuse.
                    La hauteur de la plante peut atteindre 1,5 à 2 mètres.



                    </p>
                    <P>
                    <h4>• Le sol</h4> <br>


                    Le système racinaire du gombo est pivotant, ce qui nécessite un sol profond. La
                    germination rapide est obtenue à 25-35°C. <br>


                    </P>




                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <p>
                <h4> • Variétés</h4><br>

                * rouge de Thiès, Puso, Pop 12 <br>
                * Puso, Pop 12, Clemson Spineless, Rouge
                de Thiès, Volta, Lolli, Lima F1, Indiana
                <br>
                </p>

                <h4> • Semis</h4> <br>


                Le gramme de graine contient 20 graines de couleur gris- foncé dont la germination
                est parfois capricieuse (surtout celle nouvellement récoltées, car graine très
                oléagineuse) ; ainsi la conservation devient difficile du fait des risque de rancissement
                (conserver au frais et au sec). Il est conseillé de les tremper dans de l’eau tiède 24
                heures avant semis. <br>
                Le semis se fait directement en place en poquet (2 à 3 graines par poquet) en lignes
                espacées d’un mètre et 30 – 40 cm entre les poquets ; éclaircir à 1 plant par poquet
                après 3 semaines suivi d’une irrigation immédiate. <br>

                On peut semer en pot ou en alvéoles en pépinière et les planter 25-30 jours après
                semis (AS). <br>
                On sème 3-5kg de graine /ha. La levée a lieu après une semaine.

                </p>

                <p>
                <h4> • Fertilisation</h4> <br>
                * Fertilisation organique : la plante est très exigeante en fumure
                organique (30-40 tonnes par ha), suivi d’un labour pour enfouissement. <br>
                * Fertilisation minérale : (fertilisation du CDH) : 200kg d’engrais
                10 -10 -20 par ha (20grammes par m²) à 30, 50, et 70 jours après semis,
                suivi d’un léger griffage.

                </p>


            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <p>
                <h4>• Ennemis</h4><br>
                -- Insectes <br>
                * Les chenilles : plusieurs chenilles attaquent le gombo <br>
                * Jassides : insecte piqueur suceur qu’on retrouve à la face inférieure des
                feuilles <br>
                * Les altises : petit coléoptère brun clair sur le dessous des feuilles, ils perforent
                les feuilles de petits trous, dangereux sur jeunes plantes <br>
                * Les cétoines : coléoptère qui décore feuilles, tiges, fleurs et capsules. <br>
                * Les pucerons : insecte piqueur suceur, des colonies sont présentes sur les
                feuilles, les fleurs et les fruits de gombo. <br>
                * Bemisia tabaci « mouches blanches » les larves, de couleur vert clair, sont
                translucides et ressemblent à des cochenilles. Ce ravageur, surtout important
                pendant la saison sèche, est un vecteur de virus <br>
                * Les punaises : les larves et les adultes sucent la sève des jeunes pousses, qui
                flétrissent et se dessèchent.<br>
                -- Lutte contre les insectes :<br>
                * spinosad, cypermethrine, deltaméthrine, fenitrothion, chlorpyrifos-ethyl (dusban),
                insecticide à base de Bacillus thuringiensis,etc.<br>
                NB : Bien mouiller les deux faces du feuillage.<br>
                -- Les Maladies <br>
                * L’oïdium (Oïdium abelmoschi) : taches poudreuses blanches sur les
                deux faces <br>
                -- Lutte : variétés résistantes
                Utilisation de soufre, iprodione <br>
                * Fusarium oxysporum fsp vasinfectum : qui provoque une maladie
                vasculaire aboutissant à un flétrissement de la plante.<br>
                -- Lutte : rotation cultural d’au moins 3 ans
                Bénomyl en lutte préventive <br>
                Variétés résistantes <br>
                * Cercospora abelmoschi : taches noirâtres sur les feuilles, suivies d’un
                desséchement. <br>
                -- Lutte : manèbe, bénomyl <br>
                * nématodes à galles (Méloidogyne sp.) : le gombo est très sensible aux
                nématodes <br>
                -- Lutte : rotation culturale <br>
                Utilisation de nématicides : Carbofuran, Ethoprophos (Mocap),
                phénamiphos (némacur <br>


            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                * La durée du cycle est de 125 à 160 jours après semis, cette récolte débute à
                50-65 jours. <br>
                * On obtient des rendements de 15 -30 T/ha ; les rendements les plus faibles
                sont obtenus en période fraîche.



                </p>
            </div>

        </div>
    </div>

    @endsection