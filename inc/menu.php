<?php
//controle inlog

//rol gebruiker

//samenstellen menu
$menu = '';

//menu op basis van rol
$menu = '<nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="klanten.php">Klantgegevens</a></li>
                <li><a href="#">Opdrachten</a></li>
                <li><a href="#Beheer" class="dropdown">Beheer</a>
                    <ul>
                        <li><a href="#">Nieuwe gebruiker</a></li>
                        <li><a href="#">Wijzigen gebruiker</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Uitloggen</a></li>
            </ul>
        </nav>';
echo $menu;
?>