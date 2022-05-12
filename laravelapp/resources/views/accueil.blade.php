<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>sitedemad</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/acceuil.css">
    <link rel="stylesheet" href="assets/css/Signup-page-with-overlay.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/template/footer.css">
    <link rel="stylesheet" href="assets/css/template/navbar.css">
</head>

<body>
    <div id="navbar" class="post-navbar minified">
        <nav class="navbar navbar-light navbar-expand-md fixed-top py-3 minified">
            <div class="container"><a class="logo" href="../accueil"><img src="assets/img/244355562_581213866363420_5612047840486019529_n.png"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" id="nav-presentation_bde" href="../presentation_bde">Le BDE</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" id="nav-actualites" href="#">Actualités&nbsp;</a>
                            <div class="dropdown-menu"><a class="dropdown-item" id="nav-calendrier" href="../calendrier">Calendrier</a><a class="dropdown-item" id="nav-evenements" href="../evenements">Evénements</a><a class="dropdown-item" id="nav-propositions" href="../propositions">Boîte à idées</a></div>
                        </li>
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu" aria-labelledby="nav-actualites">
                                <li><a id="navbar-proposition" class="dropdown-item" href="#">Link</a></li>
                                <li><a id="navbar-evenement" class="dropdown-item" href="#">Link</a></li>
                                <li><a id="navbar-calendrier" class="dropdown-item" href="#">Link</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="nav-boutique" href="../boutique">Boutique</a></li>
                    </ul>@auth
                    <div class="dropdown show"><a class="dropdown-toggle user-picture" aria-expanded="true" data-bs-toggle="dropdown" href="#"><img class="rounded-circle" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200" style="width: 2em;"></a>
                        <div class="dropdown-menu show"><a class="dropdown-item non-selectable-item" href="assets/img/1327362094.jpeg">Connecté en temps que : {{ Auth::user()->name }}</a><a class="dropdown-item" href="#">Mon compte</a><a class="dropdown-item" href="#">Déconnexion</a></div>
                    </div>@endauth<a class="btn btn-primary" role="button" href="../contact" style="white-space: nowrap;margin-right: 1vh;">Contactez-nous</a>@guest<a class="btn btn-outline-primary" role="button" href="connexion" style="white-space: nowrap;margin-right: 1vh;">Connexion</a>@endguest
                </div>
            </div>
        </nav>
        <div class="navbar-spacer"></div>
    </div>
    <div class="carousel slide" data-bs-ride="carousel" id="photo_accueil">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/madrillet-1.jpg" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/244355562_581213866363420_5612047840486019529_n.png" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/campus.png" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#photo_accueil" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#photo_accueil" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#photo_accueil" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#photo_accueil" data-bs-slide-to="1"></li>
            <li data-bs-target="#photo_accueil" data-bs-slide-to="2"></li>
        </ol>
    </div>
    <div class="container align-items-center" id="presentation">
        <h1>Association des Étudiants du Madrillet</h1>
        <p>Association des étudiants (BDE) du Madrillet. Organisation et amélioration de la vie étudiante à l'UFR Sciences et Techniques de Saint Etienne du Rouvray. L'apparence fantasmagorique de ce mammifère pondant des œufs, à la mâchoire cornée ressemblant au bec d'un canard, à queue évoquant un castor, qui lui sert à la fois de gouvernail dans l'eau et de réserve de graisse, et à pattes de loutre&nbsp;a fortement surpris les explorateurs qui l'ont découvert&nbsp;; bon nombre de naturalistes européens ont cru à une plaisanterie. C'est l'un des rares mammifères venimeux&nbsp;: le mâle porte sur les pattes postérieures un aiguillon qui peut libérer du venin capable de paralyser une jambe humaine ou même de tuer un chien. Les traits originaux de l'ornithorynque en font un sujet d'études important pour mieux comprendre l'évolution des espèces animales et en ont fait un des symboles de l'Australie&nbsp;: il a été utilisé comme mascotte pour de nombreux événements nationaux et il figure au verso de la pièce de monnaie de 20&nbsp;cents australiens.<br></p><a class="btn btn-primary" role="button" href="presentation_bde">Présentation du BDE</a>
    </div>
    <div class="container" id="next_event">
        <h1>Nos prochains Événements</h1>
        <div class="row">
            <div class="col"><img src="assets/img/14_04_page-0001.jpg"><button class="btn btn-primary" type="button">Plus d'infos</button></div>
            <div class="col"><img src="assets/img/275852910_455925642979754_4717005834680076966_n.jpg"><button class="btn btn-primary" type="button">Plus d'infos</button></div>
        </div><a class="btn btn-primary" role="button" href="calendrier">Calendrier des&nbsp;Événements</a>
    </div>
    <div class="container" id="suggestions" style="margin-bottom: 10vh;">
        <h1>Vos suggestions</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">date</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <p>count</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">date</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <p>count</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">date</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <p>count</p>
                    </div>
                </div>
            </div>
        </div><a class="btn btn-primary" role="button" href="propositions">Une suggestion ?</a>
    </div>
    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5"><a class="btn btn-primary" role="button" href="../contact">Contactez-nous</a>
            <p></p>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></a></li>
                <li class="list-inline-item me-4"></li>
                <li class="list-inline-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></a></li>
            </ul><a href="../mention_legales">Mentions légales</a>
            <p class="text-muted mb-0">Copyright © 2022 Adémad</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/boutique/bootsrtap-Payment-Form.js"></script>
</body>

</html>