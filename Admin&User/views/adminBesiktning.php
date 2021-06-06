<?php
?>

<html>
<body>
<form action="<?= $_SERVER["SCRIPT_NAME"]?>/adminBesiktning?id=<?= $id ?>" method="post">
    <div>
        <label> 1. ARBETSOBJEKT TYP</label>
        <br>
        <label for="Kund">Kund:</label>
        <input type="text" name="Kund" id="Kund" value ="<?= $besiktning["kundNamn"] ?>" readonly>

        <label for="Mobil">Mobil tel.:</label>
        <input type="text" name="Mobil" id="Mobil" value ="<?= $besiktning["kundTelefon"] ?>" readonly>
        <br>
        <label for="Adress">Adress:</label>
        <input type="text" name="Adress" id="Adress" value ="<?= $besiktning["adress"] ?>" readonly>

        <label for="Telefon">Telefon:</label>
        <input type="text" name="Telefon" id="Telefon" value ="<?= $besiktning["kundTelefon"] ?>" readonly>
    </div>

    <br>

    <div>
        <label> 2. ELENTREPENÖR</label>
        <br>
        <label for="Namn">Namn:</label>
        <input type="text" name="Namn" id="Namn">

        <label for="Mobil">Mobil tel.:</label>
        <input type="text" name="Mobil2" id="Mobil2">

        <br>

        <label for="Adress2">Adress:</label>
        <input type="text" name="Adress2" id="Adress2">

        <label for="Telefon2">Telefon:</label>
        <input type="text" name="Telefon2" id="Telefon2">
    </div>

    <br>

    <div>
        <label> 3. ELNÄTETS ÄGARE: </label>

        <label> <?= $besiktning["owner"] ?> </label>
    </div>

    <br>

    <div>
        <label for="Nominell märkspänning"> 4. NOMINELL MÄRKSPÄNNIG</label><br>
        <input type="text" name="märkspänning" id="Nominell märkspänning" value="<?= $besiktning["voltage"] ?>" readonly><br>

        <br>

        <label for="Kortsluningsström"> 5.KORTSLUTNINGSSTRÖM VID ANSLUTNINGEN</label><br>
        <label for="Minsta">Minsta: </label>
        <input type="number" name="lowest" id="Minsta" value="<?= $besiktning["lowest"] ?>" readonly>

        <label for="Största">Största: </label>
        <input type="number" name="highest" id="Största" value="<?= $besiktning["highest"] ?>" readonly><br>
    </div>

    <br>

    <div>
        <label> 6. GRUNDEN FÖR BESIKTNINGEN</label><br>
        <label><h2><?= $besiktning["besiktningsBas"] ?></h2></label>
        <br>
    </div>

    <label> 9. BESIKTNINGENS RESULTAT </label><br><br>

    <label>Enligt säkerhetsnivån i SFS 6000 </label><br>

    <input type="radio" id="uppnådd" name="resultat" value="uppnådd">
    <label for="uppnådd"> uppnådd </label> <br>

    <input type="radio" id="ouppnådd" name="resultat"
           value="ouppnådd (bristerna i bilaga)">
    <label for="ouppnådd (bristerna i bilaga)"> ouppnådd (bristerna i bilaga) </label> <br>

    <input type="radio" id="korrigering" name="resultat"
           value="Korrigeringsuppmaning givits">
    <label for="Korrigeringsuppmaning givits"> Korrigeringsuppmaning givits </label> <br>


    <label for="date">Datum då befintliga brister måste vara avhjälpta:</label>
    <input type="date" id="bristerDatum"
           name="bristerDatum" value="<?php echo date('Y-m-d'); ?>"
           min="<?php echo date('Y-m-d'); ?>"><br><br>


    <<label> 10. UTFÖRARE AV BESIKTNINGEN</label><br><br>
    <label for="10Namn">Namn:</label>
    <input type="text" name="besiktningsNamn" id="10Namn"><br>

    <label for="Underskrift">Underskrift:</label>
    <input type="text" name="besiktningsUnderskrift" id="Underskrift">

    <label for="date">Tid och plats:</label>
    <input type="date" id="10Tid och plats"
           name="besiktningsTid" value="<?php echo date('Y-m-d'); ?>"
           min="<?php echo date('Y-m-d'); ?>">
    <input type="text" name="besiktningsPlats" id="10place"><br><br>


    <label> 11. ELENTREPRENÖR</label><br><br>
    <label for="11Namn">Namn:</label>
    <input type="text" name="elNamn" id="11namn"><br>

    <label for="11Underskrift">Underskrift:</label>
    <input type="text" name="elUnderskrift" id="11Underskrift" >

    <label for="date">Tid och plats:</label>
    <input type="date" id="11Tid och plats"
           name="besiktningsUnderskrift2" value="<?php echo date('Y-m-d'); ?>"
           min="<?php echo date('Y-m-d'); ?>">
    <input type="text" name="besiktningsPlats2" id="11place"><br><br>-

    <input type="hidden" name="id" value="">


    <br>
    <input type="submit" id="submit" value="submit">
    <!--<button type="button" onclick="download(this.form)" id="submitbutton">Download</button>-->

</form>

</body>
</html>