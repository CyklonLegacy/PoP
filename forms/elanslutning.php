<?php
?>

<html>
    <body>
        <form action="somephp.php" method="post">
            <label>Namn 1</label>
            <input type="text" required>
            <label>Personsignum 1</label>
            <input type="text" required>
            <br>
            <label>Namn 2</label>
            <input type="text">
            <label>Personsignum 2</label>
            <input type="text">
            <br>
            <label>Fastighetsbeteckning:</label>
            <input type="text" required>
            <br>
            <label>Gatuadress:</label>
            <input type="text" required>
            <label>Kommun:</label>
            <input type="text" value="Om annan än Mariehamn">
            <br>

            <br>
            <label>Typ av byggnad:</label>
            <br>
            <input type="radio" id="1" name="bostad" value="Bostad för fast boende">
            <label for="1">Bostad för fast boende</label>
            <br>
            <input type="radio" id="2" name="bostad" value="Fritidshus">
            <label for="2">Fritidshus</label>
            <br>
            <input type="radio" id="3" name="bostad" value="Övrigt">
            <label for="3">Övrigt</label>
            <br>
            <br>
            <label>Huvudsaklig uppvärmningskälla:</label>
            <br>
            <input type="radio" id="1" name="värmekälla" value="Elvärme">
            <label for="1">Elvärme</label>
            <br>
            <input type="radio" id="2" name="värmekälla" value="Värmepump">
            <label for="2">Värmepump</label>
            <br>
            <input type="radio" id="3" name="värmekälla" value="">Annat <input type="text" name="other">
            <br>
            <br>
            <label>Placering av mätcentral:</label>
            <br>
            <input type="radio" id="1" name="mätcentral" value="På yttervägg">
            <label for="1">På yttervägg</label>
            <br>
            <input type="radio" id="2" name="mätcentral" value="Stolpcentral">
            <label for="2">Stolpcentral</label>
            <br>
            <input type="radio" id="3" name="mätcentral" value="Annan placering (kräver tillstånd)">
            <label for="3">Annan placering (kräver tillstånd)</label>
            <br>
            <br>
            <label>Förläggning:</label>
            <br>
            <input type="radio" id="1" name="Förläggning" value="Jordkabel">
            <label for="1">Jordkabel</label>
            <br>
            <input type="radio" id="2" name="Förläggning" value="Luftledning">
            <label for="2">Luftledning</label>
            <br>
            <br>

            <label>Anslutningsstorlek som önskas</label>
            <br>
            <input type="radio" id="1" name="Anslutning" value="3 x 25 A">
            <label for="1">3 x 25 A</label>
            <br>
            <input type="radio" id="2" name="Anslutning" value="3 x 35 A">
            <label for="2">3 x 35 A</label>
            <br>
            <input type="radio" id="3" name="Anslutning" value="">Annat 3 x<input type="number" name="other">A
            <br>
            <br>

            <label>Ungefärligt avstånd till närmaste transformatorstation: <input type="number" name="avstånd"></label> meter.
            <p><i><b>Till ansökan bifogas karta med den aktuella fastigheten inritad och/eller situationsplan över tomten.</i></b></p>
            <br>

            <label>Datum när elanslutningen önskas: </label>
            <input type="date" id="start" name="trip-start"
                    value="<?php echo date('Y-m-d'); ?>"
                    min="<?php echo date('Y-m-d'); ?>">
            <br>
            <label>Övriga eventuella uppgifter:<input type="text" name="extra"></label></label>


            <br>

            <p>En offert på anslutningsavgiften samt ett anslutningsavtal kommer att lämnas till Er.
                När Mariehamns EnergiAb erhållit det undertecknade<br> anslutningsavtaletpåbörjas arbetet med serviskabeldragningen
                till av Mariehamns EnergiAbs anvisade anslutningspunkt eller annan överenskommen<br> plats för anslutningspunkten.
                Avgiften för anslutningen faktureras efter att anslutningskabelarbetet slutförts. Grundavgift för anslutningen<br> debiterasdärefter löpande.</p>
            <p><b>Undertecknad förbinder sig att följa Anslutningsvillkor och Elleveransvillkor fastställda av Ålands landskapsregering<br> samt av Mariehamns EnergiAb fastställda anvisningar.</b></p>

            <Label>Ort </Label><input type="text" name="ort"><label> och datum </label> <input type="date" id="start" name="fromdate"
                                                                                              value="<?php echo date('Y-m-d'); ?>"
                                                                                              min="<?php echo date('Y-m-d'); ?>">
            <br>
            <br>
            <Label>Sökandes namnteckning </Label><input type="text" name="namnteckning">
            <br>
            <Label>Sökandes namnteckning(2) </Label><input type="text" name="namnteckning">
            <br>
            <br>
            <Label>Telefon hem: </Label><input type="text" name="hemtelefon">
            <br>
            <Label>mobil: </Label><input type="text" name="mobil">
            <br>
            <Label>arbete: </Label><input type="text" name="arbete">
            <br>
            <Label>epost: </Label><input type="text" name="epost">
            <br>
            <br>
            <Label>Nuvarande adress: </Label><input type="text" name="adress">
            <br>
            <Label>Postadress: </Label><input type="text" name="postadress">
            <Label>Faktureringsadress om avvikande: </Label><input type="text" name="faktureringsadress">

            <br>
            <br>
            <input type="submit" id="submit" value="submit">

        </form>
    </body>
</html>
