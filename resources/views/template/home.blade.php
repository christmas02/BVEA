@extends('template.navigation')

@section('content')

<div id="bvcarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item one active">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="animated fadeInDown">
                                        <h1 class="display-6 font-weight-bold">"On donne de la vie aux années" , le
                                            lancement des activités de la fondation. Ne soyez pas en reste.</h1>
                                        <a href="" class="btn btn-outline-light btnJumbotron">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item one">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="animated fadeInDown">
                                        <h1 class="display-6 font-weight-bold">Agir avec nous pour le bien être des
                                            aines, préparez le vôtre.</h1>
                                        <a href="" class="btn btn-outline-light btnJumbotron">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item one">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="animated fadeInDown">
                                        <h1 class="display-6 font-weight-bold">Vous ne le sentez pas mais vous agissez
                                            tous les jours avec nous.</h1>
                                        <a href="" class="btn btn-outline-light btnJumbotron">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </header>

        <main>
            <section id="news">
                <div class="container">
                    <div class="cards">
                        <div class="row d-flex justify-content-around">
                            <div class="col-4">
                                <div class="card img">
                                    <div class="card-body"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row d-flex">
                                   <div class="col-md-4">
                                       <div class="card yellowCard">
                                       <div class="card-body" style="height: 398px">
                                       <i class="fas fa-newspaper mb-3"></i>
                                       <h5>ACTUALITÉ</h5>
                                       <p>
                                        Message de la Présidente Chers donateurs et partenaires...
                                       </p>
                                       <a class="floating" href="Message-de-la-preseident.html"><i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></a>
                                      </div>
                                     </div>
                                   </div>

                                   <div class="col-md-4">
                                       <div class="card blueCard">
                                <div class="card-body" style="height: 398px">
                                    <i class="fas fa-newspaper mb-3"></i>
                                    <h5>ACTUALITÉ</h5>
                                    <p>
                                        La journée retraite active, constitue un moment privilégié pour informer ....
                                    </p>
                                    <a class="floating" href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></a>
                                </div>
                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                       <div class="card yellowCard">
                                       <div class="card-body" style="height: 398px">
                                           <i class="fas fa-newspaper mb-3"></i>
                                           <h5>ACTUALITÉ</h5>
                                           <p>
                                             La marche sportive, inciter à la pratique du sport pour une meilleure santé....
                                          </p>
                                          <a class="floating" href="#"><i class="fa fa-chevron-right"
                                            aria-hidden="true"></i></a>
                                       </div>
                                   </div> 
                                   </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="font-weight-bold">dernieres actualites</h2>
                                <p class="text-light font-weight-bold">
                                    Retrouvez toutes les informations liées à l'actualité de la Fondation et à notre
                                    lutte contre l'isolement des personnes âgées : nos évènements, nos prises de
                                    position, nos différentes actions…
                                </p>
                                <a href="actualite.html" class="btn btn-de">Decouvrir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id='newsletter'>
                <div class="container">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 class="text-light font-weight-bold text-center titre1">RECEVEZ PAR MAIL TOUTE L'ACTUALITE
                            <br>DE LA
                            FONDATION BIEN VIEILLIR EN AFRIQUE</h1>
                        <form action="#" method="post" class="d-flex mt-5">
                            <input type="email" name="email" placeholder="Entrez votre adresse email">
                            <button type="submit">S"INSCRIRE</button>
                        </form>
                    </div>

                </div>
            </section>

            <section id="actions">
                <div class="container">
                    <h2 class="color2 font-weight-bold text-center titre1">DECOUVREZ NOS ACTIONS</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card action">
                                <img src="resources/images/IMG-BVEA/img0.png">
                                <div class="cards">
                                    <div class="content">
                                        <h4 class="font-weight-bold">ACTIVITÉS PHYSIQUES</h4>
                                        <p class="">
                                            Les activités physiques de plein air pour les personnes de 50 ans et plus se poursuivront. ...
                                        </p>
                                        <a class="floatingBlue" href="nosActions.html"><i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card action">
                                <img src="resources/images/IMG-BVEA/img8.png">
                                <div class="cards">
                                    <div class="content">
                                        <h4 class="font-weight-bold">HABITUDES ALIMENTAIRES</h4>
                                        <p class="">
                                            Chez la personne âgée, un apport nutritionnel adéquat peut améliorer la qualité de vie et prolonger ...
                                        </p>
                                        <a class="floatingBlue" href="nosActions.html"><i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card action">
                                <img src="resources/images/IMG-BVEA/img09.jpg">
                                <div class="cards">
                                    <div class="content">
                                        <h4 class="font-weight-bold">CAPACITES COGNITIVES</h4>
                                        <p>
                                            L'objectif de ce programme est de vieillir en bonne santé cognitive. ...
                                        </p>
                                        <a class="floatingBlue" href="nosActions.html"><i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card action">
                                <img src="resources/images/IMG-BVEA/img0.png">
                                <div class="cards">
                                    <div class="content">
                                        <h4 class="font-weight-bold">SOLITUDE ET L'ISOLEMENT SOCIAL</h4>
                                        <p class="">
                                            Plusieurs raisons peuvent pousser une personne âgée à s'isoler du monde extérieur. ...
                                        <a class="floatingBlue" href="nosActions.html"><i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card action">
                                <img src="resources/images/IMG-BVEA/img09.jpg">
                                <div class="cards">
                                    <div class="content">
                                        <h4 class="font-weight-bold">PRÉVENTION ET SECURITE</h4>
                                        <p class="">
                                            Ce programme a deux objectifs principaux que sont :
                                            -	Dépister au plus tôt les maladies liées à l'âge ...

                                        </p>
                                        <a class="floatingBlue" href="nosActions.html"><i class="fa fa-chevron-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-2 col-md-8">
                            <h1 class="color2 font-weight-bold text-center titre1">TROUVER UNE EQUIPE LOCALE</h1>
                            <p class="color2 text-center">
                                Nos équipes, bénévoles et partenaires organisent régulièrement activités autours des
                                axes d'action évoqués plus haut. Restez informé de toute activité près de chez vous.
                            </p>
                            <form action="#" method="post">
                                <div class="d-flex mt-5">
                                    <div class="prepend d-flex justify-content-center align-items-center"><i
                                            class="fas fa-map-marker-alt"></i></div>
                                    <input type="email" name="email" placeholder="Saisir votre code postal">
                                </div>
                                <div class="d-flex mt-3">
                                    <div class="prepend d-flex justify-content-center align-items-center back2">
                                        <i class="fa fa-phone text-light" aria-hidden="true"></i>
                                    </div>
                                    <input type="email" name="email" placeholder="Saisir votre code postal"
                                        class="back2">
                                </div>
                                <div class="mt-2 text-center">
                                    <button type="submit" href="#" class="btn wBtn">Envoyer</button>
                                </div>


                            </form>

                        </div>
                    </div>

                </div>
            </section>

            <section id="forfaits">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-1 col-md-10">
                            <h2 class="color2 font-weight-bold text-center titre1">DECOUVREZ NOS ACTIONS</h2>
                            <p class="text-center">Votre générosité est le moteur de notre action. Avec votre soutien
                                vous nous permettez de sortir de leur isolement, de la pauvreté et parfois même de la
                                rue de nombreuses personnes âgées. Nous avons besoin de vous..</p>
                        </div>
                        <div class="col-md-4">
                            <div class="card action1">
                                <div class="card-body">
                                    <a href="#" class="btn">120000 F CFA</a>
                                    <p class="pt-20 blod-0 text-center">Une grande aide pour soutenir l'action journalière auprès des personnes isolées.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card action2">
                                <div class="card-body">
                                    <a href="#" class="btn">120000 F CFA</a>
                                    <p class="pt-20 blod-0 text-center">Une grande aide pour soutenir l'action journalière auprès des personnes isolées.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card action3">
                                <div class="card-body">
                                    <a href="#" class="btn">120000 F CFA</a>
                                    <p class="pt-20 blod-0 text-center">Une grande aide pour soutenir l'action journalière auprès des personnes isolées.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="payment">
                <div class="container">
                    <form action="#" method="post" class="d-flex justify-content-center align-items-center">
                        <h4 for="amount" class="text-light mr-3 font-weight-bold">MONTANT LIBRE : </h4>
                        <input type="text" name="amount" placeholder="0 CFA">
                        <button type="submit">JE DONNE</button>
                    </form>
                    <p class="text-light text-center font-weight-bold mt-4">Votre don ne vous coute que 0F CFA aores
                        reduction fiscale</p>

                </div>
            </section>
        </main>

@endsection

