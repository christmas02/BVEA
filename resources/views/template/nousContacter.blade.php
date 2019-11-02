@extends('template.navigation')

@section('content')

            <div id="imgPanel">
                <div class="panelContent1 contactUs">
          
                        <div class="container">
                            <h1 class="fontSlide text-center">NOUS CONTACTER</h1>
                                    <p class="titre1 text-lowercase font-weight-light text-center">
                                        Immeuble XL, 6ème et 7ème étage Angle 
                                    </p>
                        </div>
                    </div>
            </div>

        </header>

        <main id="contactezNous">
            <div class="wrapper">
                    <h1 class="color2 text-uppercase titre1 text-center mb-5">contactez-nous pour toute demande</h1>

                <form action="#" method="post" class="mt-5">
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="theme">Thematique*</label>
                                        <input type="text" name="theme" id="theme" class="form-control" required>
                                    </div>
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Nom">Nom*</label>
                                        <input type="text" name="Nom" id="Nom" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="Prenoms">Prenoms*</label>
                                            <input type="text" name="Prenoms" id="Prenoms" class="form-control" required>
                                        </div>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email*</label>
                            <input type="email" name="email" id="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Carte postal">Carte postal*</label>
                                        <input type="text" name="postal" id="Carte postal" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="Ville">Ville*</label>
                                            <input type="text" name="Ville" id="Ville" class="form-control" required>
                                        </div>
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Pays">Pays*</label>
                                        <input type="text" name="Pays" id="Pays" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="Telephone">Telephone*</label>
                                            <input type="text" name="Telephone" id="Prenoms" class="form-control" required>
                                        </div>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="Message">Message*</label>
                                <textarea name="Message" id="Message" class="form-control" rows="8" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="accept" id="accept">
                                    <label for="accept">Inscrivez-vous à nos newsletters afin de recevoir nos dernières actualités</label>
                            </div>
                            <div class="form-group d-flex flex-column align-items-center">
                                <button type="submit" class="btn blueBtn">ENVOYER</button>
                                <small class="text-muted mt-1">*Champs obligatoires</small>
                                <small class="text-center mt-3">
                                        Les informations recueillies à partir de ce formulaire font l’objet d’un traitement informatique destiné à traiter votre demande. 
                                        Les destinataires des données sont les membres du service concerné par votre demande.
                                        Vous disposez, en nous écrivant, d'un droit d'accès, de rectification et de suppression des données vous concernant.
                                </small>
                            </div>
                </form>
            </div>
        </main>

        <footer class="footer-area bg-footer section-padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img src="resources/images/IMG-BVEA/logoFooter.png" width="100%">
                        <!-- Social Info -->
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
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | by <a href="" target="_blank"></a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
