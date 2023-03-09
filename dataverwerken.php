<?php
include 'inc/header.php';

echo '<header class="head">';
echo '<p>Verwerken data</p>';
echo '</header>';

echo '<main class="main-content">';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $action = isset($_POST["action"]) ? $_POST["action"] : 'LEEG';
    function updateKlant() {
        global $dbconn;
        $id = isset($_POST['klantnr']) ? $_POST['klantnr'] : 0;
        $klantnaam = isset($_POST['klantnaam']) ? addslashes($_POST['klantnaam']) : "";
        $contactpersoon = isset($_POST['contactpersoon']) ? addslashes($_POST['contactpersoon']) : "";
        $straat = isset($_POST['straat']) ? addslashes($_POST['straat']) : "";
        $huisnummer = isset($_POST['huisnummer']) ? addslashes($_POST['huisnummer']) : "";
        $postcode = isset($_POST['postcode']) ? addslashes($_POST['postcode']) : "";
        $plaats = isset($_POST['plaats']) ? addslashes($_POST['plaats']) : "";
        $telefoon = isset($_POST['telefoon']) ? addslashes($_POST['telefoon']) : "";

        $queryUpdateKlant = " UPDATE Klant
                                set naam = '{$klantnaam}', cp = '{$contactpersoon}', straat = '{$straat}', huisnummer = '{$huisnummer}', postcode = '{$postcode}', plaats = '{$plaats}', telefoon = '{$telefoon}'
                                WHERE id = {$id}";
        if (mysqli_query($dbconn, $queryUpdateKlant)) {
            echo "<p>Klant {$klantnaam}({$id}) is aangepast!</p><br>";
            header('refresh: 1; url=klanten.php');
            exit();
        } else {
            echo "<p>Klant {$klantnaam}({$id}) is <b> NIET </b> aangepast!</p><br>";
            header('refresh: 5; url=klanten.php');
            exit();
        }
    }
    function insertKlant() {
        global $dbconn;
        $klantnaam = isset($_POST['klantnaam']) ? addslashes($_POST['klantnaam']) : "";
        $contactpersoon = isset($_POST['contactpersoon']) ? addslashes($_POST['contactpersoon']) : "";
        $straat = isset($_POST['straat']) ? addslashes($_POST['straat']) : "";
        $huisnummer = isset($_POST['huisnummer']) ? addslashes($_POST['huisnummer']) : "";
        $postcode = isset($_POST['postcode']) ? addslashes($_POST['postcode']) : "";
        $plaats = isset($_POST['plaats']) ? addslashes($_POST['plaats']) : "";
        $telefoon = isset($_POST['telefoon']) ? addslashes($_POST['telefoon']) : "";

        $queryInsertKlant = " INSERT INTO klant (naam, cp, straat, huisnummer, postcode, plaats, telefoon) values ('{$klantnaam}', '{$contactpersoon}', '{$straat}', '{$huisnummer}', '{$postcode}', '{$plaats}', '{$telefoon}')";
        if (mysqli_query($dbconn, $queryInsertKlant)) {
            echo "<p>Klant {$klantnaam} is toegevoegd!</p><br>";
            header('refresh: 1; url=klanten.php');
            exit();
        } else {
            echo "<p>Klant {$klantnaam} is <b> NIET </b> toegevoegd!</p><br>";
            header('refresh: 5; url=klanten.php');
            exit();
        }
    }
    
        switch ($action) {
            case "UpdateKlant":
                updateKlant();
                break;
            case "InsertKlant":
                insertKlant();
                break;
            case "LEEG":
            default:
                echo "Geen geldige actie...!";
        }
        
} else {
    header('url=klanten.php');
}

echo '</main>';
include 'inc/footer.php';
?>
