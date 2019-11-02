<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="resources/fontawesome/css/all.css">

    <link rel="stylesheet" href="resources/css/style.css">

    <a data-viewport="1024x768" data-icon="display" data-version="17″"></a>
    <a data-viewport="1280x800" data-icon="notebook"></a>
    <a data-viewport="2560x1600" data-icon="display" data-version="30″"></a>
    <a data-viewport="1920×1080" data-icon="tv"></a><a data-viewport="1440×1080" data-icon="tv"></a><a data-viewport="1280×720" data-icon="tv"></a>


    <title>Bien veillir en afrique</title>


    <link rel="icon" href="resources/images/core-img/favicon.png">
</head>

<body>
    <div class="container-fluid">

        <header class="pt-4">
            <div class="container d-flex flex-column align-items-end reste">
                <div class="d-flex">
                    <a href="#" class="font-weight-light mr-3">ESPACE BENEVOLAT</a>
                    <div class="v-divider"></div>
                    <a href="#" class="font-weight-light ml-3">ESPACE BENEFICIAIRE</a>
                    <i class="fa fa-search ml-3" aria-hidden="true"></i>
                </div>
                <div class="grayDivider mt-2">
                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
                    <img src="resources/images/IMG-BVEA/logo.png" height="40" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">


                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown mega-dropdown active clickable">
                            <a class="nav-link toClick" data-toggle="dropdown">
                                <i class="fas fa-bars"></i>
                                <a />
                                <div class="dropdown-menu mega-menu container-fluid clickable">
                                    <div class="row">
                                        <div class="col-2 firstUl">
                                            <ul class="d-flex flex-column">
                                                <a href="{{ url('contacte') }}">Nous contacter</a>
                                                <a href="{{ url('missions') }}">Nos missions de benevolat</a>
                                                <a href="#">Nos equipes locales</a>
                                                <a href="#">Nos evenements</a>
                                            </ul>
                                            <hr>
                                            <div class="row">
                                                <div class="offset-md-2 col-md-8">
                                                    <div class="d-flex justify-content-around">
                                                        <a href="#"><i class="fab fa-facebook-f fa-sm"></i></a>
                                                        <a href="#"><i class="fab fa-twitter fa-sm"></i></a>
                                                        <a href="#"><i class="fab fa-youtube fa-sm"></i></a>
                                                        <a href="#"><i class="fab fa-instagram fa-sm"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10 secondUl">
                                            <div class="row">
                                                <div class="col-3">
                                                    <ul class="d-flex flex-column">
                                                        <a href="{{ url('soutenir') }}" class="font-weight-bold">Comment
                                                            nous soutenir</a>
                                                        <a href="#">Faire un don</a>
                                                        <a href="#">Devenir benevole</a>
                                                        <a href="#">Legs et assurance Vie</a>
                                                        <a href="#">Philantropie et patrimoine</a>
                                                        <a href="#">Partenariat et mecenat</a>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <ul class="d-flex flex-column">
                                                        <a href="{{ url('actions') }}" class="font-weight-bold">Nos
                                                            actions</a>
                                                        <a href="#">Activite physique</a>
                                                        <a href="#">Habitudes alimentaires</a>
                                                        <a href="#">Capacites cognitives</a>
                                                        <a href="#">solitude et isolement social</a>
                                                        <a href="#">Prevention et securite</a>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <ul class="d-flex flex-column">
                                                        <a href="{{ url('quisommenous') }}" class="font-weight-bold">Qui sommes-nous
                                                            ?</a>
                                                        <a href="#">Notre vision</a>
                                                        <a href="#">Nos axes d'action</a>
                                                        <a href="#">L'organisation de la fondation</a>
                                                        <a href="#">Ressources</a>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <ul class="d-flex flex-column">
                                                        <a href="{{ url('actions') }}" class="
                                                            font-weight-bold">S'informer</a>
                                                        <a href="{{ url('actualite') }}">Actualites</a>
                                                        <a href="{{ url('temoinage') }}">Temoignages</a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>

                        <li class="nav-item dropdown mega-dropdown agisDrop">
                            <a class="nav-link agis" href="{{ url('soutenir') }}">J'agis</a>
                            <div class="dropdown-menu mega-menu container-fluid agisDrop">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="resources/images/IMG-BVEA/img0.png" height="300px" alt="">
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>FAIRE UN DON</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestias iusto placeat blanditiis dolores est nesciunt enim tempore vitae
                                            minus nostrum ullam fugiat,</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase text-light">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>DEVENIR BENEVOLE</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestias iusto placeat blanditiis dolores est nesciunt enim tempore vitae
                                            minus nostrum ullam fugiat,</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase text-light">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>LEGS ET ASSURANCE VIE</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestias iusto placeat blanditiis dolores est nesciunt enim tempore vitae
                                            minus nostrum ullam fugiat,</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase text-light">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-end all">
                                    <a href="{{ url('soutenir') }}" class="text-dark">
                                        decouvrir tout les moyens d'agir
                                    </a>
                                    <div class="divider"></div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link" href="{{ url('actions') }}">Nos
                                actions</a>
                            <div class="dropdown-menu mega-menu container-fluid actionsDrop">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="resources/images/IMG-BVEA/img0.png" height="300px" alt="">
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>ACTIVITES PHYSIQUES</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Les activités physiques de plein air pour les personnes de 50 ans et plus se poursuivront. Ce programme connaitra une extension par l'installation de salles ...</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>HABITUDES ALIMENTAIRES</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Chez la personne âgée, un apport nutritionnel adéquat peut améliorer la qualité de vie et prolonger l'espérance de vie. ...</p>
                                        <div class="onglet1">
                                            <div>
                                                <!--<p class="text-center text-uppercase text-light">je donne maintenant</p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>CAPACITES COGNITIVES</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">L'objectif de ce programme est de vieillir en bonne santé cognitive. Si l'on ne peut totalement empêcher la survenue d'une maladie ...</p>
                                        <div class="onglet1">
                                            <div>
                                                <!--<p class="text-center text-uppercase text-light">je donne maintenant</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-end all">
                                   <a href="nosActions.html" class="text-dark">
                                        decouvrir toutes nos actions
                                    </a>
                                    <div class="divider"></div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link" href="{{ url('quisommenous') }}">Qui sommes-nous</a>
                            <div class="dropdown-menu mega-menu container-fluid we">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="resources/images/IMG-BVEA/img0.png" height="300px" alt="">
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>NOTRE VISION</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestias iusto placeat blanditiis dolores est nesciunt enim tempore vitae
                                            minus nostrum ullam fugiat,</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>NOS AXES D'ACTION</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestias iusto placeat blanditiis dolores est nesciunt enim tempore vitae
                                            minus nostrum ullam fugiat,</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase text-light">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 onglet">
                                        <div class="d-flex justify-content-between">
                                            <p>L'ORGANISATION DE L'ASSOCIATION</p>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                        <p class="more">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Molestias iusto placeat blanditiis dolores est nesciunt enim tempore vitae
                                            minus nostrum ullam fugiat,</p>
                                        <div class="onglet1">
                                            <div>
                                                <p class="text-center text-uppercase text-light">je donne maintenant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-end all">
                                    <a href="{{ url('quisommenous') }}" class="text-dark">
                                        decouvrir l'organisation Bien Vieillir en Afrique
                                    </a>
                                    <div class="divider"></div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item item">
                            <a class="nav-link btn btn-outline-light btnOutlineNavbar" href="#">devenir benevole</a>
                        </li>

                        <li class="nav-item item">
                            <a class="nav-link btn btnNavbar" href="#">faire un don</a>
                        </li>

                    </ul>

                </div>


            </nav>

            @yield('content')

            <footer class="footer-area bg-footer section-padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img src="resources/images/IMG-BVEA/logoFooter.png" width="100%">

                        <div class="social-info section-padding-30 mt-4">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4>BIEN VEILLIR EN AFRIQUE</h4>
                        <p>Immeuble XL, 6,ème et 7lème étage Angle Rue Dr Crozet et Bld de la
                            République Abidjan-Plateau Côte d’ivoireg</p>
                        <p class="icone"><i class="fas fa-mobile color2"></i> +225 20309221</p>
                        <p>contact@bienvieillirenafrique.org</p>
                    </div>
                    <div class="col-3">
                        <p>La solitude de nos aînés vous touche, rejoignez une de nos équipes locales
                        </p>
                        <a href="#" class="btn wBtn mb-3 mb-sm-0 mr-4">Bénéficière</a>
                    </div>
                    <div class="col-3">
                        <p>La solitude de nos aînés vous touche, rejoignez une de nos équipes locales
                        </p>
                        <a href="#" class="btn blueBtn mb-3 mb-sm-0 mr-4">Faire un don</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content d-flex align-items-center justify-content-between">

                            <div class="copywrite-text">
                                <p>

                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | by <a href="" target="_blank"></a>

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="resources/js/script.js"></script>
</body>

</html>