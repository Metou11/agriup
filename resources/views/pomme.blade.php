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
                <div><img src="image/pomme.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>

                    <p>
                    <h4>• la pomme de terre</h4><br>
                    Elle appartient à la famille des solanacées et au genre Solanum.
                    Originaire du Mexique et de Zone Centrale de la Cordillère des Andes (au-dessus de
                    2000 m).C’est une plante étouffante qui s’oppose à l’envahissement des mauvaises
                    herbes. <br>
                    Le tubercule de Pomme de terre occupe une place importante dans l'alimentation
                    humaine et dans l'industrie agroalimentaires. La qualité commerciale des tubercules
                    et la résistance de la plante aux maladies sont des facteurs qui interviennent dans le
                    choix des variétés. La couleur et la qualité de la chair, la couleur de la peau ainsi que
                    la forme du tubercule diffèrent selon les variétés et interviennent dans le choix des
                    consommateurs. <br>
                    L'aptitude à la transformation (produits frits, produits déshydratés, conserves, plats
                    cuisinés, distilleries, féculeries) et la conservation des tubercules constituent aussi un
                    critère important dans le choix des variétés.



                    </p>
                    <P>
                    <h4>• Exigences</h4> <br>


                    * Climat : <br>
                    La pomme de terre est une plante de jours courts pour la tubérisation, la végétation
                    est optimale à 17° C, possible entre 13 et 24° C et complètement arrêtée à 36° C ;
                    pendant les jours longs il y a seulement développement végétatif mais pas de
                    tubérisation. <br>
                    * Sol : <br>
                    La pomme de terre préfère les sols profonds et bien drainés ; les sols lourds donnent
                    des tubercules déformés. <br>
                    Eviter les terres calcaires car il y a des risques de galle commune (maladie
                    bactérienne, causée par Streptomyces sp, qui attaque la peau qui devient très <br>
                    rugueuse). <br>
                    * Eau : <br>
                    Elle est très exigeante en eau, donc il faut irriguer, une mauvaise alimentation en eau
                    provoque un phénomène de repousse ou chapelet (car les tubercules fils émettent des
                    stolons). <br>
                    D’autres causes peuvent aussi favoriser l’apparition de ces repousses : <br>
                    * Une fumure azotée trop importante <br>
                    * Une mauvaise préparation du sol, entraînant un enracinement superficiel et donc des
                    plantes plus sensibles au stress <br>
                    * l’apport d’eau irrégulier et important (orage ou irrigation mal maîtrisée <br>


                    </P>
                    <h4>• Morphologie </h4> <br>


                    Le tubercule est cultivé comme plante annuelle, la pomme de terre est vivace par ses
                    tubercules. IL représente l’extrémité d’un stolon, donc d’une tige souterraine. Comme
                    toute tige, il porte à l’aisselle des feuilles avortées des bourgeons axillaires dormants.
                    Ces bourgeons sont situés sur la couronne, le talon étant la partie ou le tubercule
                    s’insère sur le stolon. <br>
                    * Le Germe : <br>
                    Après un certain repos végétatif, les bourgeons des yeux de couronne, puis les autres
                    entrent en croissance, le tubercule germe. <br>
                    * Le système aérien : <br>
                    Il se compose de plusieurs tiges et rameaux feuillés (autant que le tubercule a
                    développé de germes). Chaque feuille est composée de 3 à 5 paires de folioles et
                    d’une terminale, les folioles sont composées de foliolules. <br>
                    A l’aisselle d’une feuille du bourgeon apical de la tige peut apparaître chez certaines
                    variétés, à un certain stade de développement une inflorescence.
                    Le bourgeon apical poursuivant sa croissance, plusieurs inflorescences peuvent se
                    trouver successivement dégagées le long de la tige tant que la croissance de cette
                    dernière se poursuit. <br>
                    - L’inflorescence est de cyme bipare pouvant comporter 8 à 10 fleurs. <br>
                    - La fleur à corolle blanche ou violette est du type 5 gamopétale, caractéristique des
                    solanacées. <br>
                    - L’autogamie est quasi absolue ; le fruit est une baie sphérique, verdâtre contenant
                    plusieurs graines. <br>
                    * le cycle normal de végétation de la pomme de terre comprend 3 périodes : <br>
                    - le repos végétatif du tubercule <br>

                    - la croissance des germes <br>
                    - la croissance et tubérisation de la plante. <br>


                    </P>




                </div>
                </tr>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <p>
                <h4> • Variétés</h4><br>

                Il est possible d’effectuer 3 cultures de pomme de terre dans les Niayes : <br>

                Culture hâtive (primeur) : Désirée, Baraka
                Mondial, Nicola, Famosa, Claustar, Spunta, Naïma. <br>
                Culture de pleine saison: : Baraka, désirée,
                Famosa, Spunta, Diamant, Claustar, Sahel, Safran, Universa, Mandola, Aida,
                Pamina, Lola, Atlas, Yesmina, Mondial, Nicola, Ariane, Timate, Odessa,
                Daifla, Naïma… <br>
                Culture tardive : Sahel, Safran, Alaska, Désirée,
                Universa, Atlas, Mandola, Claustar, Beida. <br>
                <br>
                </p>


                <h4> • Plantation</h4> <br>


                * La pré germination des plants :
                C’est la préparation des tubercules pour la plantation ; son but c’est d’augmenter le
                rendement, un gain de terrain (raccourcissement de l’occupation dans le temps, et
                elle est économique). <br>
                Le tubercule qui provient de la récolte n’a pas de germe, on doit lui subir une pré
                germination juste après la dormance. <br>
                * Conduite de la pré germination :
                - il faut choisir un local bien aéré avec suffisamment de lumière, une certaine
                humidité (85 %) et une température favorable (20° C environ) ; dans ce local on
                peut faire 2 méthodes de pré germination : <br>
                -- méthode simple (traditionnelle) : étaler une couche d’isolant, et sur cette couche,
                étaler les pommes de terre de façon à obtenir 2 tubercules l’un sur l’autre (10 cm) ; <br>
                -- méthode perfectionnée : il suffit d’avoir de clayettes (caisses de 60 cm de long et
                40 cm de profondeur). <br>
                * Préparation du terrain :
                On doit commencer 1 ou 2 mois avant plantation par effectuer un labour profond, puis
                on apporte du fumier (20 à 30 tonnes à l’ha) suivi d’un léger enfouissement.
                A 15 jours avant plantation on apporte les engrais minéraux de fond suivi d’un
                enfouissement par des cultivateurs ; par la suite on passe au billonnage (billons
                distants de 60 à 80 cm) ; la distance entre les plants sera de 30 à 40 cm et la
                profondeur entre 8 et 12 cm suivant la nature du sol.
                * Plantation :
                -- Pour une plantation d’un ha, utiliser 1600 kg de semences de calibre 28/35mm ;
                2800 kg/ha de semences de calibre 35/45mm, ou 4600 kg/ha, pour le calibre
                45/55. <br>
                NB : Ne couper que les gros calibres une fois dans le sens de la longueur. <br>
                -- Il est recommandé avant plantation de tremper les tubercules dans une solution
                fongique (fongicide homologués) : Iprodione, Fongex, Tomex… Pendant 10 à 30
                mn. <br>
                La plantation peut se faire manuellement ou avec une planteuse en respectant la
                densité de 5 plants par m2. <br>
                </p>

                <p>
                <h4> Fertilisation</h4> <br>
                La pomme de terre a de très grosses exigences en potasse, cet élément sera dominant
                dans les équilibres de la fumure. Une bonne nutrition en K augmente le calibre des
                tubercules. <br>
                Elle est exigeante en azote, mais un excès favorise l’élongation des tiges et retarde la
                migration des réserves. <br>
                A l’inverse de l’azote, le phosphore est un facteur de précocité, il accroît le nombre de
                tubercules et leur teneur en matière sèche. <br>
                A titre indicatif : <br>
                Le CDH recommande d’apporter pour 1 ha de pomme de terre : <br>
                20 T / ha de fumier bien décomposé <br>
                250 kg de 10 – 10 – 20 en fond <br>
                250 kg de 10 – 10 – 20 juste avant buttage à 2 semaines <br>
                250 kg de 10 – 10 – 20 à 5 semaines après plantation <br>
                Ce qui donne 75unités d’N, 75 unités de P, 150 unités de K. <br>
                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4> • Irrigation</h4>
                <br>


                *Premier stade : plantation – levée : pas d’irrigation

                * Deuxième stade : stade végétatif (levée – début tubérisation) : 20 % des Irrigation <br>
                * Troisième stade : tubérisation 50è – 90è jour : c’est la période la plus importante pour
                les irrigations qui doivent être régulière (70 %) <br>
                *Quatriéme stade : prématurité : 10 %.<br>
                * Quelques jours avant la récolte, on cesse toute irrigation quand 50 % des
                feuilles sont desséchées et récolter 10 jours plus tard. <br>
                La pomme de terre peut résister jusqu’à 3,5 g de sel par litre.</p>
                <p>
                <h4>• Desherbage</h4><br>
                Hormis le désherbage manuel, il y a possibilité d’utiliser des désherbants chimiques :
                qui sont appliqués en post plantation mais avant la levée : Linuron 1kg/ha.
                Monolinuron : 1kg/ha ou un mélange de 2 aux mêmes doses. <br>
                On peut également ajouter à ce mélange un herbicide de contact (DNOC, Paraquat…)
                Dans les sols lourds, on utilise de préférence le Métabromuron (1,5kg/ha) ; la
                Métribusine donne également des résultats encourageants (0,5kg/ha). <br>

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement
                </h4><br>
                Elle se fait généralement entre 80 et 130 jours suivant les variétés. Elle intervient à
                maturité complète pour la pomme de terre à conserver, soit avant pour la pomme de
                terre de primeur (précoce) à consommer tout de suite. <br>
                Les rendements sont de l’ordre de 10 à 30 T/ha pour les cultures hâtives et tardives et
                de 20 à 40 T/ha pour les cultures de saison. <br>
                On reconnaît la maturité de la pomme de terre lorsque les tiges et les feuilles sont
                sèches. La récolte se fait par un temps sec ; mais il est de toute prudence de ne pas
                la retarder afin de ne pas être pas surpris par d’éventuelles pluies.
                La récolte peut être manuelle avec une fourche bêche, sape…, ou mécanique avec
                une arracheuse ; mais ceci nécessite une culture défanée et des tubercules fermes.
                Après récolte des tubercules, il est préférable de les laisser sur place pendant 24 à 48
                heures pour endurcir la peau et lui conférer rune meilleure résistance au transport :
                c’est la subérisation. <br>
                La récolte doit être suivie d’un calibrage des tubercules en fonction de leur diamètre.
                On doit éviter, autant que possible, de consommer les pommes de terre germées ou
                devenues verdâtres en vieillissant ; elles peuvent provoquer de fortes indispositions.
                La conservation des tubercules arrachés se fait dans un local ventilé et frais sur une
                hauteur de 1 à 1,5 m au maximum en prévoyant des canaux de ventilation et une
                isolation de la terre ou du béton. <br>


                </p>
            </div>

        </div>
    </div>

    @endsection