<?php
include ('inc/header.php');

//header 
echo '<header class="head">';
//komt een link voor een nieuwe klant
echo '</header>';
echo '<main class="main-content">';
//edit klant
echo '<div id="frmDetail">';
if(isset($_GET["id"])){
    $klantId = $_GET["id"];
} else {
    header('refresh: 2; url=klanten.php');
    exit();
}

$qryKlant = "SELECT id, naam, cp, straat, huisnummer, postcode, plaats, telefoon
                FROM klant
                WHERE id = {$klantId}";
$resultKlant = mysqli_query($dbconn, $qryKlant);
if(!mysqli_num_rows($resultKlant) == 1) {
    header('refresh: 2; url=klanten.php');
    exit();
}
$klant = mysqli_fetch_array($resultKlant);
?>
<div>   
    <form action="dataverwerken.php" method="post" class="frmDetail">
        <input type="hidden" name="action" value="UpdateKlant">
        <label for="fklantnr">Klantnr.:</label>
        <input type="text" name ="klantnr" value="<?php echo $klant["id"];?>" id=fklantnr">
        <label for="fklantnaam">Klantnaam:</label>
        <input type="text" name ="klantnaam" value="<?php echo $klant["naam"];?>" id=fklantnaam">
        <label for="fcontactpersoon">Contactpersoon:</label>
        <input type="text" name ="contactpersoon" value="<?php echo $klant["cp"];?>" id=fcontactpersoon">
        <label for="fstraat">Straat:</label>
        <input type="text" name ="straat" value="<?php echo $klant["straat"];?>" id=fstraat">
        <label for="fhuisnummer">Huisnummer:</label>
        <input type="text" name ="huisnummer" value="<?php echo $klant["huisnummer"];?>" id=fhuisnummer">
        <label for="fpostcode">Postcode:</label>
        <input type="text" name ="postcode" value="<?php echo $klant["postcode"];?>" id="fpostcode">
        <label for="fplaats">Plaats:</label>
        <input type="text" name ="plaats" value="<?php echo $klant["plaats"];?>" id="fplaats">
        <label for="ftelefoon">Telefoon:</label>
        <input type="text" name ="telefoon" value="<?php echo $klant["telefoon"];?>" id="ftelefoon">
        <div class = "submitbtn">
            <input type="submit" name="submit" value="Wijzigingen opslaan" class="btnDetailSubmit">
        </div>
    </form>
</div>
<?php
echo '</main>';
include ('inc/footer.php');
?>
