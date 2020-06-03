<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="CZB, CZB shop, Christliches Zentrum Buchegg, ">
    <meta name="author" content="Issaya Tubniyom">
    <meta name="description" content="CZB Shop">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.css.map">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js.map">
    <link rel="stylesheet" href="../js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../js/bootstrap.bundle.min.js.map">
    <link rel="stylesheet" href="../js/bootstrap.js">
    <link rel="stylesheet" href="../js/bootstrap.js.map">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <link rel="stylesheet" href="../js/bootstrap.min.js.map">
    <link rel="stylesheet" href="../js/script.js">
    <title>
        Shop - Formular - Start
    </title>
</head>

<body>
    <div class="home-background-color">
        <header>
            <!--Navigationsbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container">
                    <a class="navbar-brand" href="../index.html"><img src="../img/Webseite_background/logo.jpg"
                            alt="Bild-Icon" height="50" width="50"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    B&uumlcher
                                </a>
                                <div class="dropdown-menu bg-darkblue" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../html/buecher_andachten_und_bibel.html">B&uumlcher
                                        -
                                        Andachten und Bibel</a>
                                    <a class="dropdown-item" href="../html/buecher_glauben.html">B&uumlcher -
                                        Glauben</a>
                                    <a class="dropdown-item" href="../html/buecher_kinder_und_jugend.html">B&uumlcher -
                                        Kinder und Jugend</a>
                                    <a class="dropdown-item" href="../html/buecher_ratgeber.html">B&uumlcher -
                                        Ratgeber</a>
                                    <a class="dropdown-item" href="../html/buecher_romane.html">B&uumlcher - Romane</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filme
                                </a>
                                <div class="dropdown-menu bg-darkblue" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../html/filme_dokumentationen.html">Filme -
                                        Dokumentationen</a>
                                    <a class="dropdown-item" href="../html/filme_kinder.html">Filme - Kinder</a>
                                    <a class="dropdown-item" href="../html/filme_spielfilm.html">Filme - Spielfilme</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../html/geschenkartikel.html">Geschenkartikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../PHP/input.php">Kontaktformular</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--End Section-->
        <div class="container">

            <h1 class=="Home-Text">Kontaktformular</h1>

            <!--Section Form-->
            <form method="post">
                <div class="form-row">
                    <div class="col">
                        <label for="vorname">Vorname</label>
                        <input type="text" class="form-control" placeholder="First name" required name="vorname">
                    </div>
                    <div class="col">
                        <label for="nachname">Nachname</label>
                        <input type="text" class="form-control" placeholder="Last name" required name="nachname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="mail"
                        placeholder="firstname.name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="kommentar">Kommentar</label>
                    <textarea name="kommentar" rows="10" class="form-control" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Absenden" formaction="./PHP/bestaetigung.php">
            </form>
            <!--Section End-->
        </div>
    </div>
</body>

</html>