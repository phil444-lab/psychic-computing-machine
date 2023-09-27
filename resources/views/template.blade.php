<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('titre')</title>
    <link id="theme" href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link id="theme1" href="{{ asset('css/bootstrap1.min.css') }}" rel="stylesheet">
    <link id="theme2" href="{{ asset('css/bootstrap2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer">
</head>

<body>
    <header class="py-4">
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark bg-gradient">
        @yield('retour')
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold" href="#">
                    <span class="bg-light bg-gradient p-1 rounded-3 text-dark">Threads</span>App
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#phil">A propos</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Thèmes
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><button class="dropdown-item" id="changer-theme">Changer le thème</button></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="bg-dark text-dark bg-opacity-10">
        <section class="py-5">
            @yield('contenu')
        </section>    
    </main>
    
    <footer class="border-top bg-dark bg-gradient" id="contact">
        <div class="container py-3">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-md-4">
                    <a class="navbar-brand text-light text-uppercase fw-bold" href="#">
                        <span class="bg-light bg-gradient p-1 rounded-3 text-dark">Threads</span>App
                    </a>
                </div>
                <div class="col-12 col-md-4 text-md-center">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#" class="text-decoration-none text-light" data-bs-toggle="modal"
                                data-bs-target="#mentionsLegales">Mentions légales</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none text-light" data-bs-toggle="tooltip" title="LinkedIn">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none text-light" data-bs-toggle="tooltip" title="Instagram">
                                <i class="fab fa-instagram-square fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none text-light" data-bs-toggle="tooltip" title="Twitter">
                                <i class="fab fa-twitter-square fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal fade" id="mentionsLegales" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mentions Légales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            **Nom de la société** (si applicable)
                            Adresse de la société (si applicable)
                            Numéro de téléphone de la société (si applicable)
                            Adresse e-mail de la société (si applicable)

                            **Directeur de la publication** (si applicable)
                            Nom du directeur de la publication (si applicable)
                            Adresse e-mail du directeur de la publication (si applicable)

                            **Hébergeur du site web**
                            Nom de l'hébergeur
                            Adresse de l'hébergeur
                            Numéro de téléphone de l'hébergeur
                            Adresse e-mail de l'hébergeur

                            **Propriété intellectuelle**
                            Le contenu de ce site web, y compris les textes, images, vidéos, graphiques et autres éléments, est protégé par les lois sur la propriété intellectuelle et est la propriété exclusive de [Votre entreprise]. Toute utilisation non autorisée du contenu de ce site web est strictement interdite.

                            **Collecte de données personnelles**
                            [Votre entreprise] peut collecter des données personnelles, telles que des noms, adresses e-mail, numéros de téléphone, etc., lorsque cela est nécessaire à des fins commerciales légitimes. Les données personnelles collectées sont traitées conformément à notre politique de confidentialité.

                            **Cookies**
                            Ce site web utilise des cookies pour améliorer l'expérience de l'utilisateur. En utilisant ce site, vous consentez à l'utilisation de cookies conformément à notre politique en matière de cookies.

                            **Responsabilité**
                            [Votre entreprise] ne peut être tenue responsable de l'utilisation ou de l'interprétation des informations contenues sur ce site web. L'utilisation de ce site web se fait à vos propres risques.

                            **Liens vers d'autres sites web**
                            Ce site web peut contenir des liens vers d'autres sites web qui ne sont pas sous le contrôle de [Votre entreprise]. Nous ne sommes pas responsables du contenu de ces sites web tiers.

                            **Droit applicable**
                            Les présentes mentions légales sont régies par le droit applicable dans votre juridiction.

                            **Modification des mentions légales**
                            [Votre entreprise] se réserve le droit de modifier ces mentions légales à tout moment. Les modifications seront publiées sur ce site web.

                            **Contact**
                            Pour toute question ou demande concernant ces mentions légales, veuillez nous contacter à l'adresse suivante : [Adresse de contact].

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
