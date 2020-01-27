

<header>
    <a href="index.php" class="logo_header"></a>

    <div class="menu_header">
        <?php
            if($page == "accueil"){
                echo '
                <a href="#accueil" id="a_accueil" class="lien_menu active" >accueil</a>
                <a href="#apropos" id="a_apropos" class="lien_menu">à propos</a>
                <a href="#conferences" id="a_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu">le direct</a>
                <a href="billeterie.php" class="lien_menu">billeterie</a>
                <a href="#contact" id="a_contact" class="lien_menu">contact</a>
                ';
                }
            elseif ($page == "live") {
                echo '
                <a href="index.php" id="a_accueil" class="lien_menu">accueil</a>
                <a href="index.php#apropos" id="a_apropos" class="lien_menu">à propos</a>
                <a href="index.php#conferences" id="a_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu active">le direct</a>
                <a href="billeterie.php" class="lien_menu">billeterie</a>
                <a href="index.php#contact" id="a_contact" class="lien_menu">contact</a>
                ';
            }
            elseif ($page == "billeterie") {
                echo '
                <a href="index.php" id="a_accueil" class="lien_menu">accueil</a>
                <a href="index.php#apropos" id="a_apropos" class="lien_menu">à propos</a>
                <a href="index.php#conferences" id="a_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu">le direct</a>
                <a href="billeterie.php" class="lien_menu active">billeterie</a>
                <a href="index.php#contact" id="a_contact" class="lien_menu">contact</a>
                ';
            }
            elseif($page == "none"){
                echo '
                <a href="index.php" id="a_accueil" class="lien_menu">accueil</a>
                <a href="index.php#apropos" id="a_apropos" class="lien_menu">à propos</a>
                <a href="index.php#conferences" id="a_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu">le direct</a>
                <a href="billeterie.php" class="lien_menu">billeterie</a>
                <a href="index.php#contact" id="a_contact" class="lien_menu">contact</a>
                ';
            }?>
    </div>

    <div class="phone_menu_button">
        <a class="toggleButton" onclick="toggleButton()"><img src="assets/img/menu/open.svg" class="toggleMenuButton"></a>

    </div>

    <div class="phone_menu">
        <?php
        if($page == "accueil"){
            echo '
                <a href="#accueil" id="b_accueil" class="lien_menu active" onclick="closeMenu()">accueil</a>
                <a href="#apropos" id="b_apropos" class="lien_menu" onclick="closeMenu()">à propos</a>
                <a href="#conferences" id="b_conferences" class="lien_menu" onclick="closeMenu()">les conférences</a>
                <a href="live.php" class="lien_menu">le direct</a>
                <a href="billeterie.php" class="lien_menu">billeterie</a>
                <a href="#contact" id="b_contact" class="lien_menu" onclick="closeMenu()">contact</a>
                ';
        }
        elseif ($page == "live") {
            echo '
                <a href="index.php" id="b_accueil" class="lien_menu">accueil</a>
                <a href="index.php#apropos" id="b_apropos" class="lien_menu">à propos</a>
                <a href="index.php#conferences" id="b_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu active">le direct</a>
                <a href="billeterie.php" class="lien_menu">billeterie</a>
                <a href="index.php#contact" id="b_contact" class="lien_menu">contact</a>
                ';
        }
        elseif ($page == "billeterie") {
            echo '
                <a href="index.php" id="b_accueil" class="lien_menu">accueil</a>
                <a href="index.php#apropos" id="b_apropos" class="lien_menu">à propos</a>
                <a href="index.php#conferences" id="b_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu">le direct</a>
                <a href="billeterie.php" class="lien_menu active">billeterie</a>
                <a href="index.php#contact" id="b_contact" class="lien_menu">contact</a>
                ';
        }
        elseif($page == "none"){
            echo '
                <a href="index.php" id="b_accueil" class="lien_menu">accueil</a>
                <a href="index.php#apropos" id="b_apropos" class="lien_menu">à propos</a>
                <a href="index.php#conferences" id="b_conferences" class="lien_menu">les conférences</a>
                <a href="live.php" class="lien_menu">le direct</a>
                <a href="billeterie.php" class="lien_menu">billeterie</a>
                <a href="index.php#contact" id="b_contact" class="lien_menu">contact</a>
                ';
        }?>


    </div>


</header>