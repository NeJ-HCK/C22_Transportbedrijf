<?php
include 'inc/header.php';

echo '<header class="head">';
echo '<p>Nieuwe klant</p>';
echo '</header>';

echo '<main class="main-content">';
    echo '<div id="frmDetail">';
?>

<!-- invoegen formulier-->
<div>   
    <form action="dataverwerken.php" method="post" class="frmDetail">
        <input type="hidden" name="action" value="InsertKlant">
        <label for="fklantnaam">Klantnaam:</label>
        <input type="text" name ="klantnaam" value="" id=fklantnaam">
        <label for="fcontactpersoon">Contactpersoon:</label>
        <input type="text" name ="contactpersoon" value="" id=fcontactpersoon">
        <label for="fstraat">Straat:</label>
        <input type="text" name ="straat" value="" id=fstraat">
        <label for="fhuisnummer">Huisnummer:</label>
        <input type="text" name ="huisnummer" value="" id=fhuisnummer">
        <label for="fpostcode">Postcode:</label>
        <input type="text" name ="postcode" value="" id="fpostcode">
        <label for="fplaats">Plaats:</label>
        <input type="text" name ="plaats" value="" id="fplaats">
        <label for="ftelefoon">Telefoon:</label>
        <input type="text" name ="telefoon" value="" id="ftelefoon">
        <div class = "submitbtn">
            <input type="submit" name="submit" value="Klant toevoegen" class="btnDetailSubmit">
        </div>
    </form>
</div>

<?php
echo '</div>'; //frmDetail afsluiten
echo '</main>';
include 'inc/footer.php';
?>
