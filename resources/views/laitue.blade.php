@extends('layouts.app')
@section('content')

<form action="/laitue" method="post" class="section">
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
                <div><img src="image/imglaitue.jpg" class="rounded mx-auto d-block" alt="..." width="1300" height="500"></div>
                <div>

                    <p>
                    <h4>• la plante</h4><br>
                    Plante annuelle originaire d’Europe méridionale cultivée depuis longtemps. Les grecs
                    et les romains lui attribuèrent un pouvoir somnifère. En effet, le suc laiteux contiendrait
                    le même principe que l’opium. <br>
                    Au Sénégal, cette culture est en train de prendre un grand essor avec l’urbanisation
                    des villes et le développement du tourisme ; elle est concentré dans les grands centres
                    urbains : les Niayes, petite cote. <br>
                    Son facteur limitant c’est la qualité de l’eau, elle est très sensible a la salinité.
                    Elle supporte très mal le transport → son exportation est très difficile



                    </p>
                    <P>
                    <h4>• Morphologie</h4> <br>

                    * C’est une plante à feuille embrassante (acaule), celles du centre sont plus serrées,
                    plus groupées et forment une pomme ; plante à un cycle cultural court (2 - 3 mois) <br>
                    * Du point de vue culture, on distingue 2 groupes importants : <br>
                    - Les laitues pommées : dans ce groupe, on distingue : <br>
                    --Les laitues beurres : ce sont des laitues à feuilles fines, fragiles, ce sont les plus
                    cultivés en Europe. <br>
                    -- Les laitues grasses : laitues à grande feuilles épaisses, cassantes, résistantes
                    aux températures élevées. <br>
                    * Laitues pommées « Batavia » : feuilles légèrement dentelées sur les bords, la
                    pomme est beaucoup moins serrée. On peut trouver des batavias dans les
                    beurres et les laitues grasses. (La pomme est lâche et les feuilles à limbe
                    découpé). <br>
                    * Les laitues romaines : feuilles légèrement craquantes, les feuilles plus hautes, la
                    pommaison se fait généralement en saison chaude. Les feuilles sont érigées,
                    fermes craquantes, généralement réunies en une pomme élevée, ovoïde, variété
                    très cultivés en zone méditerranéenne. <br>


                    </P>
                    <p>
                    <h4> • Sol</h4><br>
                    le sol doit etre grumeleux et poreux, pH=6,8 – 7,2

                    </p>



                </div>
                </tr>
            </div>
            <a class="btn btn-primary" href="/maraichage" role="button">Choisir</a>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                <p>
                <h4> • Variétés</h4><br>

                * Batavia : blonde de paris, Eden (saison chaude), Pierre bénite, Sierra <br>
                * Laitue grasse : Madrilène <br>
                * Laitue beurre : Grasse blond <br>
                </p>

                <h4> • Multiplication</h4> <br>


                la semence est un akène, 1 gramme → 600-800 graines. Les
                graines sont surtout blanchâtres, mais on en trouve de noirs.
                Les normes internationales sont les suivantes : pureté spécifique = 97%,
                faculté germinative : 70%. <br>
                La faculté et l’énergie germinatives sont influencées par l’âge, l’origine et le
                mode de conservation. <br>
                Quand les conditions sont favorables, la durée germinative=5 ans. <br>
                Dormance : la germination des semences nouvelles est souvent défectueuse,
                cette dormance peut se manifester 6 mois après la récolte, surtout dans les
                pays chauds, en principe cette dormance est levée par le froid <br>
                * Semis et germination : <br>
                - à 10°C : la durée de germination→7 jours <br>
                - à 15°C : la durée de germination→4 jours <br>
                - à 20°C : la durée de germination→2,5 – 3 jours <br>
                -Il faut 2grammes →800-1000 plantes
                * Mode de semis :
                - semis direct : évite le choc du repiquage
                - semis en alvéoles
                - semis en pépinière avec repiquage à racines nues
                * Plantation : au stade 5-6 feuilles (20-25 jours), ne pas trop enterrer le collet.
                Sensibles aux désherbants chimiques. <br>
                * Distance de plantation : 0.15-0.20m X 0.15-0.20m
                </p>

                <p>
                <h4> • Fertilisation</h4>
                La laitue est peu exigeante en fumure et redoute les fumures trop abondantes. Dans
                les sols trop riches en azote, le feuillage prend un développement exagéré, la feuille
                se forme mal et devient spongieuse. C’est une culture peu épuisante. Que l’on peut
                cultiver en dérobé avant ou après une culture principale, vu son cycle court. <br>
                - Fond : 15-20T/ha de fumure bien décomposé au moins un mois avant
                plantation
                +250Kg/ha d’engrais 10-10-20 <br>
                - Fumure minéral : 250Kg/ha d’engrais 10-10-20 à 15 jours après plantation <br>

                </p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>
                <h4>• Irrigation </h4><br>
                Le système racinaire est très réduit, un manque d’eau conduit →arrêt de croissance,
                perte de poids, grande sensibilité au botrytis
                Un excès d’eau est néfaste et provoque une asphyxie racinaires et arrêt de la
                végétation.
                <p>
                <h4> • Entretien</h4><br>
                * Le tuteurage facilite la récolte et assure une meilleure protection phytosanitaire

                </p>
                < <p>
                    <h4>• Ennemis</h4><br>
                    * Pucerons <br>
                    * noctuelles <br>
                    * nématodes <br>
                    * champignon <br>
                    * Mildiou causé par Bremia lactucae <br>
                    * Fonte de semis : Botrytis, Pythium, Rhizoctonia <br>
                    Lutte : désinfection des semences <br>
                    * Pourriture grise : Botrytis cinerea <br>
                    * Sclerotinia sclerotiorum → Benomyl, Thiophanate méthyl
                    </p>



            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <p>
                <h4>• Récolte et rendement:15 - 20T/ha
                </h4><br>
                Récolter les pommes →1-1.5 mois apres plantation, couper les pommes avec
                quelques feuilles ouvertes ; utiliser un emballage rigide pour le transport.



                </p>
            </div>

        </div>
    </div>

    @endsection