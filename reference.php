<?php include('header.php') ?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-left">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><b>NASLOVNA</b></a></li>
                <li><a href="projektovanje.php"><b>PROJEKTOVANJE</b></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>IZVOĐENJE</b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="zemljani-radovi.php">Zemljani radovi</a></li>
                        <li><a href="sejanje-trave-postavljanje-tepih-travnjaka.php">Sejanje trave, postavljanje tepih travnjaka</a></li>
                        <li><a href="sadnja-biljaka.php">Sadnja biljaka</a></li>
                        <li><a href="ugradnja-dekorativnog-malca.php">Ugradnja dekorativnog malča</a></li>
                        <li><a href="ugradnja-dekorativnog-kamena.php">Ugradnja dekorativnog kamena</a></li>
                        <li><a href="izrada-staza-alpinetuma-rundela.php">Izrada staza, alpinetuma i rundela, slike</a></li>
                        <li><a href="zalivni-sistemi.php">Zalivni sistemi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>ODRŽAVANJE</b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="kosenje_trave_na_svim_vrstama_terena.php">Košenje trave na svim vrstama terena</a></li>
                        <li><a href="vertikuliranje-prozracivanje-travnjaka.php">Vertikuliranje, prozračivanje travnjaka</a></li>
                        <li><a href="odrzavanje_i_nega_cveca.php">Održavanje i nega cveća</a></li>
                        <li><a href="orezivanje_oblikovanje_zbunastog_rastinja.php">Orezivanje , oblikovanje žbunastog rastinja</a></li>
                        <li><a href="orezivanje_svih_vrsta_zivih_ograda.php">Orezivanje svih vrsta živih ograda</a></li>
                        <li><a href="orezivanje_drveca_i_voca.php">Orezivanje drveća i voća</a></li>
                        <li><a href="skupljanje_i_odnosenje_lisca.php">Skupljanje i odnošenje opalog lišća</a></li>
                        <li><a href="zastita-biljaka.php">Zaštita biljaka</a></li>
                    </ul>
                </li>
                <li class="active"><a href="reference.php"><b>REFERENCE</b></a></li>
                <li><a href="kontakt.php"><b>KONTAKT</b></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>


<div class="jumbotron galerija">
    <div class="container wow pulse">
        <h2 class="text-center">Galerija fotografija</h2>
    </div>
</div>

<div class="container usluge" style="padding: 60px 0 40px 0;">
    <div class="row tympanus">
        <div class="grid">
            <figure class="effect-apollo">
                <img src="img/tulips-21620_640.jpg" alt="img27" />
                <figcaption>
                    <h2><b>Izvođenje</b> </h2>
                    <a href="izvodjenje.php">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-apollo">
                <img src="img/green-1026355_640-1.jpg" alt="img27" />
                <figcaption>
                    <h2><b>Održavanje</b></h2>
                    <a href="odrzavanje.php">View more</a>
                </figcaption>
            </figure>

        </div>
    </div>
</div>

<?php include('footer.php') ?>
