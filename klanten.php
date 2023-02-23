<?php
include ('inc/header.php');

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
            $query = 'SELECT id, naam, cp, straat, huisnummer, postcode, plaats, telefoon 
                        FROM klant
                        ORDER BY naam, plaats
                        LIMIT 1,10;';
            $result = mysqli_query($dbconn, $query);
            $aantal = mysqli_num_rows($result);
            $contentTable = '';
            
        //tabel aanvullen met klantgegevens
            if($aantal>0) {
                while ($row = mysqli_fetch_array($result)) {
                    $contentTable .= "<tr>
                                        <td>" . $row['id'] . "</td>
                                        <td>" . $row['naam'] . "</td>
                                        <td>" . $row['cp'] . "</td>
                                        <td>" . $row['straat'] . "</td>
                                        <td>" . $row['huisnummer'] . "</td>
                                        <td>" . $row['postcode'] . "</td>
                                        <td>" . $row['plaats'] . "</td>
                                        <td>" . $row['telefoon'] . "</td>
                                        <td>
                                            <a href ='klant_edit.php?id={$row['id']}' class='btn-edit'><i class ='material-icons md-24'>edit</i></a>
                                            <a href ='klant_delete.php?id={$row['id']}' class='btn-delete'><i class ='material-icons md-24'>delete</i></a>
                                    </tr>";
                }
            }
        //rest tabel
            $contentTable .= "</table><br>";
            echo $contentTable;

        //paginering van de tabel
        //include footer
        echo '</main>';
        include ('inc/footer.php');
        ?>
