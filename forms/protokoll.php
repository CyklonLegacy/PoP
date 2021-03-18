<?php
?>
<html>
<body>
<form action="somephp.php" method="post">

    <label> 1. ARBETSOBJEKT TYP</label>
    <br>
    <label for="Kund">Kund:</label>
    <input type="text" name="Kund" id="Kund">

    <label for="Mobil">Mobil tel.:</label>
    <input type="text" name="Mobil" id="Mobil">
    <br>
    <label for="Adress">Adress:</label>
    <input type="text" name="Adress" id="Adress">

    <label for="Telefon">Telefon:</label>
    <input type="text" name="Telefon" id="Telefon">

    <br>
    <br>

    <label> 2. ELENTREPENÖR</label>
    <br>
    <label for="Namn">Namn:</label>
    <input type="text" name="Namn" id="Namn">

    <label for="Mobil">Mobil tel.:</label>
    <input type="text" name="Mobil" id="Mobil2">

    <br>

    <label for="Adress">Adress:</label>
    <input type="text" name="Adress2" id="Adress2">

    <label for="Telefon">Telefon:</label>
    <input type="text" name="Telefon2" id="Telefon2">

    <br>
    <br>

    <label> 3. ELNÄTETS ÄGARE: </label>

    <input type="checkbox" id="ÅEA" name="ÅEA" value="ÅEA">
    <label for="ÅEA"> ÅEA </label>

    <input type="checkbox" id="ELNÄT" name="ELNÄT" value="ELNÄT">
    <label for="ELNÄT"> Mariehamns energi AB (Elnlät) </label>

    <br>
    <br>

    <label for="Nominell märkspänning"> 4. NOMINELL MÄRKSPÄNNIG</label><br>
    <input type="text" name="Nominell märkspänning" id="Nominell märkspänning"><br>

    <br>

    <label for="Kortsluningsström"> 5.KORTSLUTNINGSSTRÖM VID ANSLUTNINGEN</label><br>
    <label for="Minsta">Minsta: </label>
    <input type="text" name="Minsta" id="Minsta">

    <label for="Största">Största: </label>
    <input type="text" name="Största" id="Största"><br>

    <br>

    <label> 6. GRUNDEN FÖR BESIKTNINGEN</label><br>

    <input type="checkbox" id="nyinstallation" value="nyinstallation">
    <label for="nyinstallation"> Nyinstallation </label>

    <input type="checkbox" id="ändring" value="ändring">
    <label for="ändring"> Ändrings- eller förstoringsarbete </label>

    <input type="checkbox" id="reparation" value="reparation">
    <label for="reparation"> Reparationsarbete </label> <br>

    <input type="checkbox" id="förnyad" value="förnyad">
    <label for="förnyad"> Förnyad besiktning </label>

    <input type="checkbox" id="annat" value="annat">
    <label for="annat"> Annat, vad: </label>
    <input type="text" name="vad" id="vad"><br>

    <br>

    <label> 7. OKULÄRBESIKTNING </label><br>
    <label> + i skick - något att anmärka 0 hör inte fil besiktningen </label><br>
    <label> I besiktningen konstateras okulärt de i punkt b nämnda ärendena I tillämpliga delar. Konstaterade brister meddelas på separat bilaga. </label><br>
    <br>
    <label> a. Anslutningsledning </label><br>

    <label>Ändbox</label>
    <select name="a.Ändbox" id="a.Ändbox">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>Skydd</label>
    <select name="a.Skydd" id="a.Skydd">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br>

    <label for="typ"> typ: </label>
    <input type="text" name="typ" id="typ">

    <label for="area"> area: </label>
    <input type="text" name="area" id="area"><br><br>

    <label> b. Genfomföring </label>
    <select name="b.Genfomföring" id="b.Genfomföring">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> c. Huvudsäkrningar </label>
    <label>SAKNAS</label><br><br>

    <label> d. Jordelektrod Enligt SFS 6000-5-54 </label><br>
    <label>i fundament</label>
    <select name="d.fundament" id="d.fundament">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>40m slinga</label>
    <select name="d.40m slinga" id="d.40m slinga">
        <option value=" "></option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>1st 20m i matningskabelns dike</label>
    <select name="d.1st 20m i matningskabelns dike" id="d.1st 20m i matningskabelns dike">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>elnätets jordningssystem</label>
    <select name="d.elnätets jordningssystem" id="d.elnätets jordningssystem">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br>

    <label>nära fundament</label>
    <select name="d.nära fundament" id="d.nära fundament">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>lodräta elektroder</label>
    <select name="d.lodräta elektroder" id="d.lodräta elektroder">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>2st 20m i olika riktningar</label>
    <select name="d.2st 20m i olika riktningar" id="d.2st 20m i olika riktningar">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>Potentialutjämning</label>
    <select name="d.Potentialutjämning" id="d.Potentialutjämning">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br>

    <label>PE- eller PEN-skena</label>
    <select name="d.PE- eller PEN-skena" id="d.PE- eller PEN-skena">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>fjärrvärmenät</label>
    <select name="d.fjärrvärmenät" id="d.fjärrvärmenät">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>vattenledningsnät</label>
    <select name="d.vattenledningsnät" id="d.vattenledningsnät">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>ventilationskanaler</label>
    <select name="d.ventilationskanaler" id="d.ventilationskanaler">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br>

    <label>betongarmering</label>
    <select name="d.betongarmering" id="d.betongarmering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>antennsystem</label>
    <select name="d.antennsystem" id="d.antennsystem">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>telefonsystem</label>
    <select name="d.telefonsystem" id="d.telefonsystem">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>åskskydd</label>
    <select name="d.åskskydd" id="d.åskskydd">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> e. Huvudcentral </label><br>

    <label>placering</label>
    <select name="e.placering" id="e.placering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>konstruktion</label>
    <select name="e.konstruktion" id="e.konstruktion">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>märkningar</label>
    <select name="e.märkningar" id="e.märkningar">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>frånskiljningsmöjlighet</label>
    <select name="e.frånskiljningsmöjlighet" id="e.frånskiljningsmöjlighet">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>rotationsriktning</label>
    <select name="e.rotationsriktning" id="e.rotationsriktning">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>installation</label>
    <select name="e.installation" id="e.installation">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> f. Fördelningscentraler </label><br>

    <label>placering</label>
    <select name="fplacering" id="fplacering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>konstruktion</label>
    <select name="f.konstruktion" id="f.konstruktion">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>märkningar</label>
    <select name="f.märkningar" id="f.märkningar">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>montering</label>
    <select name="f.montering" id="f.montering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>rotationsriktning</label>
    <select name="f.rotationsriktning" id="f.rotationsriktning">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> g. Gruppledningar </label><br>

    <label>anslutning till centralen </label>
    <select name="g.anslutning till centralen" id="g.anslutning tillcentralen">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>areor</label>
    <select name="g.areor" id="g.areor">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>märkningar</label>
    <select name="g.märkningar" id="g.märkningar">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>montering</label>
    <select name="g.montering" id="g.montering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> h. Uttag </label><br>

    <label>placering</label>
    <select name="h.placering" id="h.placering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>konstruktion</label>
    <select name="h.konstruktion" id="h.konstruktion">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>rotationsriktning</label>
    <select name="h.rotationsriktning" id="h.rotationsriktning">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>ledningarnas anslutningar</label>
    <select name="h.ledningarnas anslutningar" id="h.ledningarnas anslutningar">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> i. Armaturer </label><br>

    <label>placering</label>
    <select name="i.placering" id="i.placering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>konstruktion</label>
    <select name="i.konstruktion" id="i.konstruktion">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>ledningarnas anslutningar</label>
    <select name="i.ledningarnas anslutningar" id="i.ledningarnas anslutningar">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> j. Värmeanläggningar </label><br>

    <label>radiatorernas placering och montering</label>
    <select name="j.radiatorernas placering och montering"
            id="j.radiatorernas placering och montering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>bastuugnens placering och montering</label>
    <select name="j.bastuugnens placering och montering"
            id="j.bastuugnens placering och montering">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>värmefolieinstallationer</label>
    <select name="j.värmefolieinstallationer"
            id="j.värmefolieinstallationer">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br>

    <label>värmekabel installationer</label>
    <select name="j.värmekabel installationer"
            id="j.värmekabel installationer">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>värmepump installationer</label>
    <select name="j.värmepump installationer"
            id="j.värmepump installationer">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> k. Övriga anläggningar </label><br>

    <label>spis</label>
    <select name="k.spis"
            id="k.spis">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>annat</label>
    <select name="k.annat"
            id="k.annat">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> l. övriga installationer </label><br>

    <label>telefoninstallationer</label>
    <select name="l.telefoninstallationer"
            id="l.telefoninstallationer">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>antenninstallationer</label>
    <select name="l.antenninstallationer"
            id="l.antenninstallationer">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>övriga teletekniska installationer</label>
    <select name="l.övriga teletekniska installationer"
            id="l.övriga teletekniska installationer">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> m. Slutritningar </label><br>

    <label>centralschemor</label>
    <select name="m.centralschemor"
            id="m.centralschemor">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>ledningsschemor</label>
    <select name="m.ledningsschemor"
            id="m.ledningsschemor">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>

    <label>bruksanvisningar och skötseldirektiv</label>
    <select name="m.bruksanvisningar och skötseldirektiv"
            id="m.bruksanvisningar och skötseldirektiv">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select><br><br>

    <label> INSTALLATIONERNA I SKICK </label>
    <select name="INSTALLATIONERNA I SKICK"
            id="INSTALLATIONERNA I SKICK">
        <option value=" "> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="0">0</option>
    </select>
    <label> Bilagor </label>
    <select name="Bilagor"
            id="Bilagor">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
    <label> st. </label><br><br>

    <label> 8. MÄTNINGAR CENTRALVIS  </label><br>

    <label> a. Kontinuiteten hos skyddsledare och potentialutjämningsledare </label><br>
    <input type="checkbox" id="Kontinuiteten konstaterats genom mätning"
           value="Kontinuiteten konstaterats genom mätning">
    <label for="Kontinuiteten konstaterats genom mätning">
        Kontinuiteten konstaterats genom mätning </label><br><br>

    <label> b. Isolationsresistans </label><br>

    <label> Hela centralens isolationsresistans </label>
    <input type="text" name="MΩ" id="MΩ">
    <label> MΩ </label><br><br>

    <label> Gruppledningar som bör mätas separat </label><br>
    <label>Grupp nr</label>
    <input type="text" name="Grupp nr1" id="Grupp nr1">

    <label>Isolationsresistans</label>
    <input type="text" name="Isolationsresistans1" id="Isolationsresistans1"><br>

    <label>Grupp nr</label>
    <input type="text" name="Grupp nr2" id="Grupp nr2">

    <label>Isolationsresistans</label>
    <input type="text" name="Isolationsresistans2" id="Isolationsresistans2"><br><br>

    <label> c. Konstateras uppfyllande av kraven för automatisk frånkoppling </label><br>

    <input type="checkbox" id="Konstaterats genom mätning"
           value="Konstaterats genom mätning">
    <label for="Konstaterats genom mätning"> Konstaterats genom mätning </label>

    <input type="checkbox" id="Konstaterats vid planering"
           value="Konstaterats vid planering">
    <label for="Konstaterats vid planering"> Konstaterats vid planering </label><br>
    <br>

    <label> Den lägsta kortslutningsströmmen i grupper som mäts separat </label><br>

    <label>Grupp nr</label>
    <input type="text" name="Grupp nr3" id="Grupp nr3">

    <label>lkmin/A</label>
    <input type="text" name="lkmin/A3" id="lkmin/A3">

    <label>Säkringstyp/storlek </label>
    <input type="text" name="Säkringstyp/storlek3" id="Säkringstyp/storlek3"><br>

    <label>Grupp nr</label>
    <input type="text" name="Grupp nr4" id="Grupp nr4">

    <label>lkmin/A</label>
    <input type="text" name="lkmin/A4" id="lkmin/A4">

    <label>Säkringstyp/storlek </label>
    <input type="text" name="Säkringstyp/storlek4" id="Säkringstyp/storlek4"><br><br>

    <label> d. Funktionsprovning för jordfelsbrytare </label><br>

    <label> Fabrikat, Typ, Märkning/beteckning </label>
    <input type="text" name=" Fabrikat, Typ, Märkning/beteckning"
           id=" Fabrikat, Typ, Märkning/beteckning">

    <label>Nominella värden In/IΔn </label>
    <input type="text" name="Nominella värden In/IΔn " id="Nominella värden In/IΔn "><br>

    <label>Uppmätt funktionsström IΔ </label>
    <input type="text" name="Uppmätt funktionsström IΔ " id="Uppmätt funktionsström IΔ ">

    <label>Utlösningstid [ms] </label>
    <input type="text" name="Utlösningstid [ms]" id="Utlösningstid [ms]4">
    <br><br>


    <label> e. Bilagor som hänför sig till mätningarna ?? st </label><br><br>

    <label>  f. Mätutrustningar som använts: Instrumentet skall
        uppfylla standarden EN 61 557 </label><br>

    <label>Utrustning </label>
    <label>1.</label>
    <input type="text" name="Utrustning1" id="Utrustning1">
    <label>2.</label>
    <input type="text" name="Utrustning2" id="Utrustning2">
    <label>3.</label>
    <input type="text" name="Utrustning3" id="Utrustning3"><br>
    <label>Tillverkare</label>
    <label>1.</label>
    <input type="text" name="Tillverkare1" id="Tillverkare1">
    <label>2.</label>
    <input type="text" name="Tillverkare2" id="Tillverkare2">
    <label>3.</label>
    <input type="text" name="Tillverkare3" id="Tillverkare3"><br>
    <label>Typ </label>
    <label>1.</label>
    <input type="text" name="Typ1" id="Typ1">
    <label>2.</label>
    <input type="text" name="Typ2" id="Typ2">
    <label>3.</label>
    <input type="text" name="Typ3" id="Typ3"><br><br>

    <label> 9. BESIKTNINGENS RESULTAT </label><br><br>

    <label>Enligt säkerhetsnivån i SFS 6000 </label><br>

    <input type="checkbox" id="uppnådd" value="uppnådd">
    <label for="uppnådd"> uppnådd </label> <br>

    <input type="checkbox" id="ouppnådd (bristerna i bilaga)"
           value="ouppnådd (bristerna i bilaga)">
    <label for="ouppnådd (bristerna i bilaga)"> ouppnådd (bristerna i bilaga) </label> <br>

    <input type="checkbox" id="Korrigeringsuppmaning givits"
           value="Korrigeringsuppmaning givits">
    <label for="Korrigeringsuppmaning givits"> Korrigeringsuppmaning givits </label> <br>


    <label for="date">Datum då befintliga brister måste vara avhjälpta:</label>
    <input type="date" id="Datum då befintliga brister måste vara avhjälpta:"
           name="Datum då befintliga brister måste vara avhjälpta:"><br><br>


    <label> 10. UTFÖRARE AV BESIKTNINGEN</label><br><br>
    <label for="10Namn">Namn:</label>
    <input type="text" name="10Namn" id="10Namn"><br>

    <label for="Underskrift">Underskrift:</label>
    <input type="text" name="10Underskrift" id="Underskrift">

    <label for="date">Tid och plats:</label>
    <input type="date" id="10Tid och plats"
           name="10Tid och plats">
    <input type="text" name="10place" id="10place"><br><br>


    <label> 11. ELENTREPRENÖR</label><br><br>
    <label for="11Namn">Namn:</label>
    <input type="text" name="11Namn" id="11namn"><br>

    <label for="11Underskrift">Underskrift:</label>
    <input type="text" name="11Underskrift" id="11Underskrift">

    <label for="date">Tid och plats:</label>
    <input type="date" id="11Tid och plats"
           name="11Tid och plats">
    <input type="text" name="11place" id="11place"><br><br>




    <br>
    <button id="submitButton">Submit</button>
    <button type="button" onclick="download(this.form)" id="submitbutton">Download</button>



</form>

</body>
</html>
