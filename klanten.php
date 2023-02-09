<?php
require_once 'inc/database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Klantgegevens</title>
    <!--Hier komen eventueel css bestanden -->
</head>
<body>
    <!--we zetten alles in een container-->
    <div class = "container">
        <?php 
         //menu

         //header toevoegen
         echo '<header class="head">';
         //url om nieuw klant aan te maken
         echo '</header>';
         //main-content
         echo '<main class="main-content">';
        ?>
        
        <!--tabelkop maken in HTML -->
        <table id="customers">
            <tr>    
                <th>klantnr</th>
                <th>klantnaam</th>
                <th>conctactpersoon</th>
                <th>straat</th>
                <th>huisnummer</th>
                <th>postcode</th>
                <th>plaats</th>
                <th>telefoon</th>
                <th>actie</th>
            </tr>

        <?php
        //ophalen klantgegevens
            $query = 'SELECT id, naam, cp, straat, huisnummer, postcode, plaats, telefoon, notitie 
                        FROM klant
                        ORDER BY naam, plaats
                        LIMIT 1,10;';
        //
        //tabel aanvullen met klantgegevens
        //rest tabel

        //paginering van de tabel
        //include footer
        echo '</main>';
        ?>
    </div>
</body>
</html>