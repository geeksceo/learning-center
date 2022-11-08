<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		GeeksBox
	</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="147. is a IT platform that integrates a learning hub.">
	<meta name="author" content="geeksceo">
	<link rel="shortcut icon" href="assets/favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800|Roboto:300,400,700&display=swap" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">


</head>

<body>
	<header id="header" class="header fixed-top">
		<div class="branding">
			<div class="container-fluid">
				<nav class="main-nav navbar navbar-expand-lg">
					<div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="assets/images/logo.png" alt="logo"></a></div>

					{{-- <div class="navbar-btn order-lg-2">
						<a class="btn btn-secondary" href="{{ route("register") }}">
							Réserver
						</a>
					</div> --}}

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end me-lg-3">
						<ul class="nav navbar-nav">

							<li class="nav-item"><a class="nav-link scrollto" href="#about-section">About our HUB</a></li>
							<!-- <li class="nav-item"><a class="nav-link scrollto" href="#speakers-section">Speakers</a></li> -->
							<!-- <li class="nav-item"><a class="nav-link scrollto" href="#schedule-section">Schedule</a></li> -->
							<!-- <li class="nav-item"><a class="nav-link scrollto" href="#tickets-section">Tickets</a></li> -->
							<!-- <li class="nav-item"><a class="nav-link scrollto" href="#venue-section">Venue</a></li> -->
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->

			</div><!--//container-->
		</div><!--//branding-->
	</header><!--//header-->

    <div id="hero-block" class="hero-block">
        <div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item-1 carousel-item active">
                </div>
                <div class="carousel-item-2 carousel-item">
                </div>
                <div class="carousel-item-3 carousel-item">
                </div>
            </div>
        </div>
	    <div class="hero-block-mask"></div>
        <div class="container">
            <div class="hero-text-block">
                <h1 class="hero-heading mb-4" style="font-size: 3rem;">
                    147. is a IT platform that integrates a learning hub.
                </h1>
                <div class="hero-meta mb-3">
                    <i class="far fa-calendar-alt me-2"></i>
                    12 Novembre 2022
                    <br>
                    <i class="fas fa-map-marker-alt"></i>
                    Abidjan, Côte d'Ivoire</div>
                <div class="hero-intro mb-4">
                    DARE MIGHTY THINGS, <br>
                    TOGETHER AND BETTER AND <br>
                    BETTER.
                </div>
                {{-- <div class="hero-cta">
                    <a class="btn btn-primary" href="{{ route("register") }}">
                        Réserver
                    </a>
                </div> --}}

            </div><!--//hero-text-block-->
        </div><!--//container-->

    </div><!--//hero-block-->


    <section id="about-section" class="about-section section theme-bg-light">
        <div class="container">
            <h3 class="section-heading text-center mb-3">About 147. learning hub.</h3>
            <div class="section-intro single-col-max mx-auto mb-4">
                Nous enseignons aux non-initié(e)s comment coder, mais pas que, nous enseignons les bonnes pratiques du code et du travail d'équipe.
                Étant persuadés que de bonnes fondations assurent un bâtir des plus solides,
                notre module de formation débute par les notions les plus élémentaires pour aboutir aux notions les plus avancées
                faisant appel aux technologies les plus innovantes en termes de développement logiciel.

            </div>
            <div class="benefits-list text-center mb-3">
                <h4 class="text-center mb-4">Why Join Us</h4>
                <ul class="list-unstyled text-start d-inline-block">
                    <li><i class="fas fa-check-circle me-2"></i>Une meilleure approche de l'outil Informatique, de la programmation</li>
                    <li><i class="fas fa-check-circle me-2"></i>Moins de théorie plus de pratique - le cerveau humain apprend mieux en s'exercant</li>
                    <li><i class="fas fa-check-circle me-2"></i>Découverte de technologies innovantes en matière de développement</li>
                    <li><i class="fas fa-check-circle me-2"></i>Rencontrez des développeurs de plusieurs horizons</li>
                    <li><i class="fas fa-check-circle me-2"></i>Développez votre réseau</li>
                </ul>
            </div><!--//benefits-list-->

            <div class="about-cta text-center mb-5">
                <a class="btn btn-secondary btn-lg  mb-5" href="{{ route("register") }}">
                    Réserver une place
                </a>
            </div>
        </div><!--//container-->
    </section><!--//about-section-->

    <footer class="footer py-5" style="background: #000;">
        <div class="container text-center">

            <div class="container text-muted text-center">
                © 2021, startup-147. All right reserved.
            </div>

        </div><!--//container-->
    </footer>

    <!-- Modal Speaker -->
    <div class="modal modal-speaker modal-speaker-1" id="modal-speaker-1" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="speaker-1-ModalLabel" class="modal-title sr-only">
                        Speaker Name
                    </h4>
                </div>
                <div class="modal-body p-0">
                    <div class="theme-bg-light p-5">
                        <div class="row">
                            <div class="col-12 col-md-auto text-center">
                                <img class="profile-image mb-3 mb-md-0 me-md-4 rounded-circle mx-auto" src="{% static 'assets/images/speakers/speaker-1.jpg'  %}" alt="" />
                            </div>

                            <div class="col text-center text-md-start mx-auto">
                                <h2 class="name mb-2">Speaker Name</h2>
                                <div class="meta">Job Title Or Position</div>
                                <div class="meta mb-2">Company Or Organization</div>
                                <ul class="social-list list-inline mb-0">
                                    <li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                                    <li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                                    <li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
                                </ul><!--//social-list-->
                            </div><!--//col-->
                        </div><!--//row-->
                    </div>
                    <div class="desc p-4 p-lg-5">
                        <p>You can put speaker's bio or talk related info here. Duis a mi quis metus porttitor eleifend. Pellentesque finibus ultrices imperdiet. Maecenas auctor tortor quis risus tincidunt, mattis mattis leo placerat. Fusce metus augue, sagittis eget enim vel, venenatis auctor est. In interdum felis massa, ac porta nunc pretium non. In fringilla orci vitae imperdiet malesuada. Vestibulum feugiat lobortis est, in sagittis nisi molestie vel. Mauris ultrices vitae lectus eu feugiat. Fusce semper, nisi at placerat mollis, augue elit pretium enim, eu pellentesque justo purus et lectus. </p>
                        <p class="mb-0">Donec neque magna, molestie vel varius ut, pretium a urna. Pellentesque placerat nunc eu condimentum pellentesque. Vivamus dictum nisl leo, id fermentum lectus porttitor et. Pellentesque tristique erat libero, condimentum porttitor nisl pharetra et.</p>
                    </div>
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->

	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/smoothscroll.min.js"></script>
	<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
