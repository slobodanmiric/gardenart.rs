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
                <li><a href="reference.php"><b>REFERENCE</b></a></li>
                <li class="active"><a href="kontakt.php"><b>KONTAKT</b></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>


<div class="jumbotron kontakt">
    <div class="container wow pulse">
        <h2 class="text-center">Kontaktirajte nas!</h2>
    </div>
</div>

<div class="container usluge">


    <div class="map-box">

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2809.136366717613!2d19.831162515761395!3d45.24503515606134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b103e098f6833%3A0x67de28a9e1947374!2sPu%C5%A1kinova+13%2C+Novi+Sad!5e0!3m2!1sen!2srs!4v1565797614723!5m2!1sen!2srs" width="500" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


        <div class="form-box" id="form">
            <div class="row detalji-kontakta">
                <p class="text-right">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-location-arrow"></i>&nbsp;Puškinova 13, 21000 Novi Sad</li>
                        <li><i class="fa fa-phone-square"></i>&nbsp;062 / 278-559</li>
                        <li><i class="fa fa-phone-square"></i>&nbsp;064 / 481-4516</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@gardenart.rs">&nbsp;gardenart.pro@gmail.com </a></li>
                    </ul>
                </p>
            </div>
            <div class="row">
                <h2 class="text-center">Informišite se o detaljima!</h2>
            </div>
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">

                    <div class="row">

                        <?php
                           
                           if ($_GET['success'] == 1 ) {
                               echo "<div class=\"form-messages success\">Hvala! Vaša poruka je poslata.</div>";
                           }
                           
                           if ($_GET['success'] == -1) {
                               echo " <div class=\"form-messages error\">Ups! Nešto nije u redu. Pokušajte ponovo.</div>";
                           }
                           ?>


                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Ime</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name" id="name" placeholder="Vaše ime" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" placeholder="Vaš email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="find-us">Kako ste nas pronašli?</label>
                        </div>
                        <div class="col-md-8">
                            <select name="find-us" id="find-us">
                                <option value="prijatelji" selected>Preko prijatelja</option>
                                <option value="pretraga">Putem pretrage</option>
                                <option value="ad">Advertajzinga</option>
                                <option value="drugo">Drugo</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Napišite poruku</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="message" placeholder="Vaša poruka"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col-md-8">
                            <input type="submit" value="Pošalji!">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php') ?>
