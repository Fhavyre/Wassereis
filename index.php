<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- Roboto -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <title>Wassereis</title>
    </head>
    <body>
        <?php
            $email= $_POST['email'];
            $name= $_POST['name'];
            $betreff = $_POST['betreff'];
            $nachricht = $_POST['name'];

            if(isset($_POST['submit'])) {
                // Check if name has been entered
                if(empty($_POST['name'])) {
                    $errName= 'Bitte Name eingeben';
                }
                // Check if email has been entered and is valid
                else if(empty($_POST['email'])) {
                    $errEmail = 'Bitte valide e-mail eingeben';
                } else if(empty($_POST['betreff'])) {
                    $errBetreff = 'Bitte valide e-mail eingeben';
                } else if(empty($_POST['nachricht'])) {
                    $errBetreff = 'Bitte Nachricht eingeben';
                } else {
                    echo $nachricht;
                }
            }
        ?>
        <div class="container-fluid header" id="header"> <!-- Head with background image-->
            <nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="nav">  <!-- Navbar -->
                <div class="container">
                    <a class="navbar-brand" href="#">Wassereis</a> 

                    <!-- Button to open collapsable part-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggler" onclick="toggleBackground()">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                
                    <!-- Collapsable part of navbar-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eissorten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Philosophie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontakt</a>
                            </li>
                        </ul>
                        <div class="search">
                            <form class="form-inline my-2 my-lg-0f">
                                <input class="form-control mr-sm-2" type="search" placeholder="Suche" aria-label="Search">
                                
                            </form>
                        </div>
                    </div> <!-- end collapsable part-->
                </div> <!-- end navbar container -->
            </nav>


            <div class="container-float" id="header-content-container"> <!-- Header content container -->
                <h1>Wasser <b>Eis</b></h1>
                <h2>Der Online Shop für Ihren Genuss.</h2>
                <div class="container" id="bestellen">
                    <div class="mx-auto">
                        <a href="#Eissorten" class="btn btn-secondary">Eissorten</a>
                        <a href="#" class="btn btn-primary">Eis bestellen</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="Eissorten">
            <h3>Unsere Lieblingssorten</h3>
            <p>Probieren auch Sie die meistverkauften Wassereis Sorten dieses Jahres. Vergessen Sie Erdbeer, Vanille oder Schokolade - wir erfinden das Wassereis neu!</p>
            <div class="card-deck" id="sorten-deck"> <!-- Eissorten card deck-->
                <div class="card">
                        <div class="card-body text-center body-click"> <!-- weird hack to make only body clickable-->
                            <img class="img-fluid" src="res/ian-dooley-TLD6iCOlyb0-unsplash.jpg" alt="Himbeer-Apfel Eis"/>
                            <a href="#" class="btn btn-link stretched-link">Himbeer-Apfel</a>
                            <p>Unsere köstliche fruchtige Kombination für den ultimativen Sommer.</p>
                        </div>
                    <div class="card-footer">
                        <b>ab 1,70 €</b>
                        <div class="float-right">
                            <a href="#" class="fas fa-eye color-grey"></a>
                            <a href="#" class="fas fa-heart color-grey"></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body text-center body-click">
                        <img class="img-fluid" src="res/rachael-gorjestani-HLt6jQLf_J0-unsplash.jpg" alt="Zimt-Pfeffer Eis">
                        <a href="#" class="btn btn-link stretched-link">Zimt-Pfeffer</a>
                        <p>Das Eis für wahre Genießer - Zimt mit einem Hauch Pfeffer.</p>
                    </div>
                    <div class="card-footer">
                        <b>ab 2,10 €</b>
                        <div class="float-right">
                            <a href="#" class="fas fa-eye color-grey"></a>
                            <a href="#" class="fas fa-heart color-grey"></a>
                        </div>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-body text-center body-click">
                        <img class="img-fluid" src="res/dana-devolk-5-RS_ScO3X4-unsplash.jpg" alt="Karamellschmelz Eis">
                        <a href="#" class="btn btn-link stretched-link">Karamellschmelz</a>
                        <p>Zerfließt schneller als du essen kannst: Geschmolzenes Karamell.</p>
                    </div><div class="col">
                    
                    </div>
                    <div class="card-footer container-fluid">
                            <b>ab 1,20 €</b>
                        <div class="float-right">
                            <a href="#" class="fas fa-eye color-grey"></a>
                            <a href="#" class="fas fa-heart color-grey"></a>
                        </div>
                    </div>
                    
                </div>
            </div> <!-- end div Eissorten card deck-->
            <div class="card" id="zahlen"> <!-- Wassereis in Zahlen Card-->
                <h3 class="card-title">Wassereis in Zahlen</h3>
                <div class="card-body container">
                    <div class="row">
                        <div class="col-sm">
                            <b class="color-white large-font">42 </b>
                            <i class="fa fa-briefcase color-white large-font"> Sorten</i>
                        </div>
                        <div class="col-sm">
                            <b class="color-white large-font">3500 </b>
                            <i class="fa fa-user color-white large-font"> Kunden</i>
                        </div>
                        <div class="col-sm">
                            <b class="color-white large-font">100% </b>
                            <i class="fa fa-smile color-white large-font"> Zufriedenheit</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="service">
                <h3 class="card-title">Service</h3>
                <h4 class="card-title">Unser Qualitätsversprechen</h4>
                <div class="card-body">
                    <p>
                        Wir stehen für unser Produkt. Hochwertiges Wassereis seit 200 Jahren.
                    </p>

                    <div class="row">
                        <div class="col-sm">
                            <h5>Geschmack</h5>
                            <h6>Auf der Zunge</h6>
                        </div>
                        <div class="col-sm-8">
                            <div class="color-grey">Unser Wassereis ist purer Genuss für Ihren Gaumen. Überzeugen Sie sich vom einzigartigen Geschmack unseres Wassereises.
                                 Verwöhnen Sie Ihre Geschmacksknospen mit unserem hochwertigen Wassereis.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <h5>Gefühl</h5>
                            <h6>Im Magen</h6>
                        </div>
                        <div class="col-sm-8">
                            <div class="color-grey">nser Wassereis fühlt sich im Mund besonders cremig an - ist im Magen aber gut bekömmlich und nahezu schwerelos. 
                                Garantiert kein Föllegefühl und keine Überfressungssymptome! Unser Wassereis ist für Ihren Verdauungstrakt optimiert.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <h5>Lieferung</h5>
                            <h6>An die Haustür</h6>
                        </div>
                        <div class="col-sm-8">
                            <div class="color-grey">Wir liefern unser Wassereis - garantiert eisgekühlt - bis direkt an Ihre Haustüre. 
                                Und das bei Bedarf auch unglaublich schnell - wählen Sie einfach Expressversand bei der Abholung aus.</div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h3>Kontakt</h3>
            <p>Du hast Fragen zu unseren Produkten? Nimm einfach Kontakt mit uns auf.</p>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form role="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="name">Dein Name</label><br>
                                        <input class="form-control" type="text" id="name" name="name"></input>
                                        <?php echo $errName; ?>
                                    </div>
                                    <div class="col">
                                        <label for="email">Deine E-Mail Adresse</label><br>
                                        <input class="form-control" type="email" id="email" name="email"></input>
                                        <?php echo $errEmail; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="betreff">Betreff</label><br>
                                        <input class="form-control" type="text" id="betreff" name="betreff" ></input>
                                        <?php echo $errBetreff; ?>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <label for="nachricht">Deine Nachricht</label>
                                        <textarea class="form-control" rows="5" id="name" name="nachricht"></textarea>
                                        <?php echo $errNachricht; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input class="btn btn-secondary" type="submit" id="submit" name="submit" value="Absenden"></input>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col" id="kontaktdaten">
                        <div class="row">
                            <i class="fa fa-map-marker"> </i>
                            &nbspKronacher Straße 41, 96052 Bamberg
                        </div>
                        <div class="row">
                            <i class="fa fa-phone"> </i>
                            &nbsp+ 49 951 99 33 97 50
                        </div>
                        <div class="row">
                            <i class="fa fa-envelope"> </i>
                            &nbspkarriere@pringuin.de
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid footer">
            <div class="row lighter">
                <div class="col">
                    <h3>Wassereis online kaufen</h3>
                    <p>Wir sind führender Online Shop von Wassereis.</p>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <a class="row text-white text-center" href="#">Philosophie</a>
                    <a class="row text-white text-center" href="#">Team</a>
                    <a class="row text-white text-center" href="#">Produktion</a>
                </div>
                <div class="col">
                    <h3>Rechtliches</h3>
                    <a class="row text-white text-center" href="#">Impressum</a>
                    <a class="row text-white text-center" href="#">Datenschutzerklärung</a>
                    <a class="row text-white text-center" href="#">AGB</a>
                </div>
            </div>

            <div class="row">
                <p><i class="fa fa-copyright">2020 Copyright: </i>PRinguin</p>
            </div>
        </div>
        <!-- JQuery JS -->
        <script src="res/jquery-3.3.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="res/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="res/bootstrap.min.js"></script>
        <!-- own JS -->
        <script src="res/main.js"></script>
    </body>
</html>