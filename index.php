<?php
    session_start();
    $counter_name = "counter.txt";
    // Read the current value of our counter file
    $f = fopen($counter_name,"r");
    $counterVal = fread($f, filesize($counter_name));
    fclose($f);

    // Has visitor been counted in this session?
    // If not, increase counter value by one
    if(!isset($_SESSION['hasVisited'])){
        $_SESSION['hasVisited']="yes";
        $counterVal++;
        $f = fopen($counter_name, "w");
        fwrite($f, $counterVal);
        fclose($f);
    }
?>
    <!doctype html>
    <html lang="en" id="father">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>AlyCAD</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/paper-kit.css?v=2.1.0" rel="stylesheet" />

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="../assets/css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/css/nucleo-icons.css" rel="stylesheet">

        <!--  My style     -->
        <link href="../assets/css/myStyle.css" rel="stylesheet" />

        <!--  New fa icons     -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.0/css/fork-awesome.min.css" integrity="sha256-sX8HLspqYoXVPetzJRE4wPhIhDBu2NB0kYpufzkQSms=" crossorigin="anonymous">
		
		<!-- meta tags -->
		<meta name="google-site-verification" content="n3eedIGA30mAFZM8N6LyRwbbNLUdi5hMkPjpNJ9nyJc" />
		<meta name="description" content="Firmă autorizată de către Agenția Națională de Cadastru și Publicitate Imobiliară, va oferă servicii de cadastru și topografie, în vederea înscrierii imobilului dumneavoastră în cartea funciară (intabulare imobil), dezmembrări/alipiri, planuri parcelare, ridicări topografice în scopul obținerii autorizației de construire.">
		<meta name="keywords" content="Cadastru, Topografie, Intabulari, Cadastru Iasi, Topografie Iasi, Alin, Remus, AlyCAD, Dezalipiri, Dezmembrari, Romania, Iasi">
		<meta name="author" content="Andronachi Remus-Alin">
	</head>

    <body id="acasa">
        <nav class="navbar navbar-expand-lg fixed-top bg-info" color-on-scroll="0">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="/">ALYCAD</a>
                    <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbar TogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
	            </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#acasa" class="nav-link"><i class="nc-icon nc-shop"></i> Acasă</a>
                        </li>
                        <li class="nav-item">
                            <a href="#servicii" class="nav-link"><i class="nc-icon nc-briefcase-24"></i> Servicii</a>
                        </li>
                        <li class="nav-item">
                            <a href="#proiecte" class="nav-link"><i class="nc-icon nc-atom"></i> Proiecte</a>
                        </li>
                        <li class="nav-item">
                            <a href="#despremine" class="nav-link"><i class="nc-icon nc-chat-33"></i> Despre mine</a>
                        </li>
                        <!--li class="nav-item">
                            <a href="#prices" class="nav-link"><i class="nc-icon nc-money-coins"></i> Prices</a>
                        </li-->
                        <li class="nav-item">
                            <a href="#contact" class="nav-link"><i class="nc-icon nc-email-85"></i> Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/alycad-wallpaper.png'); background-repeat: no-repeat; background-position: center center;">
            <div class="for-mobile">
                <div class="filter"></div>
                <div class="container">
                    <div class="motto text-center">
                        <h1><strong style="font-weight: bold">AlyCAD</strong></h1>
                        <h3><strong>CADASTRU - TOPOGRAFIE</strong></h3>
                    </div>
                </div>
            </div>
            <div class="container" style="bottom: 25px !important; position: absolute">
                <div class="for-fullHd">
                    <div class="motto text-center text-info">
                        <h3><strong style="font-weight: bold">Bun venit</strong></h3>
                        <h5><strong>Ești al <?php echo $counterVal; ?>-lea vizitator de până acum</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="servicii" class="section row section-dark text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h2 class="title">AlyCAD</h2>
                            <h5 class="description">Firmă autorizată de către Agenția Națională de Cadastru și Publicitate Imobiliară, va oferă servicii de cadastru și topografie, în vederea înscrierii imobilului dumneavoastră în cartea funciară (intabulare imobil), dezmembrări/alipiri, planuri parcelare, ridicări topografice în scopul obținerii autorizației de construire.</h5>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="nc-icon nc-album-2"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Cadastru și intabulare apartamente/terenuri</h4>
                                    <!--p class="description">Spend your time generating new ideas. You don't have to think of implementing.</p-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="nc-icon nc-bulb-63"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Dezmembrări și parcelări</h4>
                                    <!--p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="nc-icon nc-chart-bar-32"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Comasari sau alipiri de teren</h4>
                                    <!--p>Choose from a veriety of many colors resembling sugar paper pastels.</p-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="nc-icon nc-sun-fog-29"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Realizare de planuri topografice</h4>
                                    <!--p>Find unique and handmade delightful designs related items directly from our sellers.</p-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="proiecte" class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h2 class="title">Proiectele noastre</h2>
                            <h5 class="description">Suntem autorizați  ANCPI și folosim aparatură modernă în vederea realizării documentațiilor de specialitate din domeniu de tipul stații totale, GPS RTK, distomate  electronice astfel încât să asigurăm precizia necesară unor măsurători de calitate la un preț corect.</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title">Cadastru</h2>
                            <img src="/assets/img/old-city.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <h5 class="description">Cadastrul este un sistem unitar și obligatoriu de evidență și inventariere sistematică a bunurilor imobile de pe teritoriul țării.</h5>
                        </div>
                        <div class="col-md-6">
                            <h2 class="title">Topografie</h2>
                            <img src="/assets/img/topography.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <h5 class="description">Topografia este o ramură a geodeziei care se ocupă cu tehnica măsurătorilor , determinarea poziţiei elementelor scoarţei terestre pe suprafeţe mici.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="despremine" class="section row section-dark text-center">
                <div class="container">
                    <h2 class="title">Despre mine</h2>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="card card-profile card-plain">
                                <div class="card-avatar">
                                    <a href="#avatar"><img src="../assets/img/alin.jpg" alt="..."></a>
                                </div>
                                <div class="card-body">
                                    <a href="#paper-kit">
                                        <div class="author">
                                            <h4 class="card-title">Andronachi Remus-Alin</h4>
                                            <h6 class="card-category">Inginer cadastru</h6>
                                        </div>
                                    </a>
                                    <p class="card-description text-center">
										Buna, numele meu este Andronachi Remus-Alin si reprezint firma de cadastru AlyCAD din Iasi.										                                
									</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://www.facebook.com/aly.remus" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-facebook" style="font-size: 30px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--div id="prices" class="section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h2 class="title">Pricing list</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product.</h5>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 columns">
                            <ul class="price">
                                <li class="header">Basic</li>
                                <li class="grey">$ 9.99 / year</li>
                                <li>10GB Storage</li>
                                <li>10 Emails</li>
                                <li>10 Domains</li>
                                <li>1GB Bandwidth</li>
                                <li class="grey"><a href="#" class="btn btn-lg btn-info-dark-price">Sign Up</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 columns">
                            <ul class="price">
                                <li class="header" style="background-color:#272361">Pro</li>
                                <li class="grey">$ 24.99 / year</li>
                                <li>25GB Storage</li>
                                <li>25 Emails</li>
                                <li>25 Domains</li>
                                <li>2GB Bandwidth</li>
                                <li class="grey"><a href="#" class="btn btn-lg btn-info-dark-price">Sign Up</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 columns">
                            <ul class="price">
                                <li class="header">Premium</li>
                                <li class="grey">$ 49.99 / year</li>
                                <li>50GB Storage</li>
                                <li>50 Emails</li>
                                <li>50 Domains</li>
                                <li>5GB Bandwidth</li>
                                <li class="grey"><a href="#" class="btn btn-lg btn-info-dark-price">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div-->
            <!-- Add Google Maps -->
            <div  class="section row" style="padding: 0px">
                <div id="googleMap" style="height:600px;width:100%;"></div>
            </div>
            <script>
                function myMap() {
                    var myCenter = new google.maps.LatLng(47.1567594, 27.5913326);
                    var mapProp = {
                        center: myCenter,
                        zoom: 13,
                        scrollwheel: false,
                        draggable: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    var marker = new google.maps.Marker({
                        position: myCenter
                    });
                    marker.setMap(map);
                }

            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-UmjFJctkgFONvXm4b-EoM-1CGj2q_hM&callback=myMap"></script>
            <!-- End Google Maps -->
            <div id="contact" class="section row">
                <div class="container">
                    <div class="row text-center text-info">
                        <div class="col-md-4">
                            <a target="_blank" href="http://maps.google.com/?q=Iasi, Iasi, Romania">
                                <h4><span class="fa fa-map-marker"></span> Strada Prof. Anton Sesan, nr.20, bl. I1-4, sc.I3, Iași, RO</h4>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="tel:+40 754 821 311">
                                <h4><span class="fa fa-phone"></span> +40 748 580 144</h4>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:office@alycad.ro">
                                <h4><span class="fa fa-envelope"></span> remusalinandronachi @gmail.com</h4>
                            </a>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h2 class="text-center">Vrei să mă contactezi?</h2>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nume</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
	                                            <i class="nc-icon nc-single-02"></i>
	                                        </span>
                                            <input type="text" class="form-control" placeholder="Nume">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
												<i class="nc-icon nc-email-85"></i>
											</span>
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <label>Mesaj</label>
                                <textarea class="form-control" rows="4" placeholder="Spune-mi ce gândești ... "></textarea>
                                <div class="row">
                                    <div class="col-md-4 ml-auto mr-auto text-center">
                                        <button class="btn btn-info-dark btn-lg btn-fill">Trimite mesaj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer section-dark row">
            <div class="container">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li><a style="color: white" href="/">AlyCAD</a></li>
                            <li>
                                <a style="color: white" href="https://www.facebook.com/aly.remus">                            
                                <i class="fa fa-facebook-square"></i>
                                Facebook
                            </a>
                            </li>
                            <!--li>
                            <a style="color: white" href="/">                            
                                <i class="fa fa-instagram"></i>
                                Instagram
                            </a>
                        </li-->
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>

        <form class="for-mobile" action="tel:917387084384"><button id="btnPhone"><span class="fa fa-phone" aria-hidden="true"></span></button></form>
        <form class="for-fullHd" action="https://www.facebook.com/messages/t/aly.remus" target="_blank"><button id="btnMail"><span class="fa fa-facebook-messenger" aria-hidden="true"></span></button></form>

    </body>

    <!-- Core JS Files -->
    <script src="../assets/js/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="../assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
    <script src="../assets/js/popper.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Paper Kit Initialization snd functons -->
    <script src="../assets/js/paper-kit.js?v=2.1.0"></script>

    </html>
    <script>
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {
                    window.location.hash = hash;
                });
            }
        });

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("btnPhone").style.display = "none";
            } else {
                document.getElementById("btnPhone").style.display = "block";
            }
        }
        $('.navbar-nav>li>a').on('click', function() {
            $('.navbar-collapse').collapse('hide');
        });

    </script>
