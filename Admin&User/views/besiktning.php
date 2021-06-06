<?php
?>

<?php
?>
<html>
    <body>
        <form action="<?= $_SERVER["SCRIPT_NAME"]?>/besiktning" method="post">
            <div>
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
            </div>

            <br>

                <!--<div>
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
                </div>-->

            <br>

            <div>
                <label> 3. ELNÄTETS ÄGARE: </label>

                <input type="checkbox" id="ÅEA" name="owner" value="ÅEA">
                <label for="ÅEA"> ÅEA </label>

                <input type="checkbox" id="ELNÄT" name="owner" value="ELNÄT">
                <label for="ELNÄT"> Mariehamns energi AB (Elnlät) </label>
            </div>

            <br>

            <div>
                <label for="Nominell märkspänning"> 4. NOMINELL MÄRKSPÄNNIG</label><br>
                <input type="text" name="märkspänning" id="Nominell märkspänning"><br>

                <br>

                <label for="Kortsluningsström"> 5.KORTSLUTNINGSSTRÖM VID ANSLUTNINGEN</label><br>
                <label for="Minsta">Minsta: </label>
                <input type="number" name="lowest" id="Minsta">

                <label for="Största">Största: </label>
                <input type="number" name="highest" id="Största"><br>
            </div>

            <br>

            <div>
                <label> 6. GRUNDEN FÖR BESIKTNINGEN</label><br>
                    <input type="radio" name="grund" id="grund" value="nyinstallation">
                    <label> Nyinstallation </label>

                    <input type="radio" name="grund" id="grund" value="ändring">
                    <label> Ändrings- eller förstoringsarbete </label>

                    <input type="radio" name="grund" id="grund" value="reparation">
                    <label> Reparationsarbete </label> <br>

                    <input type="radio" name="grund" id="grund" value="förnyad">
                    <label> Förnyad besiktning </label>

                    <input type="radio" name="grund" id="grund" value="annat">
                    <label> Annat, vad: </label>

                    <input type="text" name="vad" id="vad"><br>
                <br>
            </div>

            <label> 7. OKULÄRBESIKTNING </label><br>
            <label> <b>+</b> i skick <b>-</b> något att anmärka <b>0</b> hör inte fil besiktningen </label><br>
            <label> I besiktningen konstateras okulärt de i punkt b nämnda ärendena I tillämpliga delar. Konstaterade brister meddelas på separat bilaga. </label><br>
            <br>
            <label> a. Anslutningsledning </label><br>

            <select name="7a" id="7a">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>
            <label>Ändbox</label>

            <select name="skydd" id="skydd">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>
            <label>Skydd</label>
            <br>

            <label for="typ"> typ: </label>
            <input type="text" name="typ" id="typ">

            <label for="area"> area: </label>
            <input type="text" name="area" id="area"><br><br>

            <label> b. Genomföring </label>
            <select name="genfomföring" id="b.Genfomföring">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> c. Huvudsäkrningar </label> <!-- Behöver diskuteras -->
            <label>SAKNAS</label><br><br>

            <label> d. Jordelektrod Enligt SFS 6000-5-54 </label>
            <br>
            <table style="width:35%">
                <tr>
                    <th>
                    <select name="7d_1" id="d.fundament">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>i fundament</label>
                    </td>

                    <th>
                    <select name="7d_2" id="d.40m slinga">
                        <option value=" "></option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>40m slinga</label>
                    </td>

                    <th>
                    <select name="7d_3" id="d.1st 20m i matningskabelns dike">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>1st 20m i matningskabelns dike</label>
                    </td>

                    <th>
                    <select name="7d_4" id="d.elnätets jordningssystem">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>elnätets jordningssystem</label>
                    </td>
                </tr>

                <tr>
                    <th>
                    <select name="7d_5" id="d.nära fundament">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>nära fundament</label>
                    </td>

                    <th>
                    <select name="7d_6" id="d.lodräta elektroder">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>lodräta elektroder</label>
                    </td>

                    <th>
                    <select name="7d_7" id="d.2st 20m i olika riktningar">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>2st 20m i olika riktningar</label>
                    </td>

                    <th>
                    <select name="7d_8" id="d.Potentialutjämning">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>Potentialutjämning</label>
                    </td>
                </tr>

                <tr>
                    <td><br></td>
                </tr>

                <tr>
                    <th>
                    <select name="7d_9" id="d.PE- eller PEN-skena">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>PE- eller PEN-skena</label>
                    </td>

                    <th>
                    <select name="7d_10" id="d.fjärrvärmenät">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>fjärrvärmenät</label>
                    </td>

                    <th>
                    <select name="7d_11" id="d.vattenledningsnät">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>vattenledningsnät</label>
                    </td>

                    <th>
                    <select name="7d_12" id="d.ventilationskanaler">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>ventilationskanaler</label>
                    </td>
                </tr>

                <tr>
                    <th>
                    <select name="7d_13" id="d.betongarmering">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>betongarmering</label>
                    </td>

                    <th>
                    <select name="7d_14" id="d.antennsystem">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>antennsystem</label>
                    </td>

                    <th>
                    <select name="7d_15" id="d.telefonsystem">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>telefonsystem</label>
                    </td>

                    <th>
                    <select name="7d_16" id="d.åskskydd">
                        <option value=" "> </option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="0">0</option>
                    </select>
                    </th>
                    <td>
                    <label>åskskydd</label>
                    </td>
                </tr>
            </table>

            <br>

            <label> e. Huvudcentral </label><br>
            <table></table>
            <label>placering</label>
            <select name="7e_1" id="e.placering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>konstruktion</label>
            <select name="7e_2" id="e.konstruktion">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>märkningar</label>
            <select name="7e_3" id="e.märkningar">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>frånskiljningsmöjlighet</label>
            <select name="7e_4" id="e.frånskiljningsmöjlighet">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>rotationsriktning</label>
            <select name="7e_5" id="e.rotationsriktning">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>installation</label>
            <select name="7e_6" id="e.installation">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> f. Fördelningscentraler </label><br>

            <label>placering</label>
            <select name="7f_1" id="fplacering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>konstruktion</label>
            <select name="7f_2" id="f.konstruktion">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>märkningar</label>
            <select name="7f_3" id="f.märkningar">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>montering</label>
            <select name="7f_4" id="f.montering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>rotationsriktning</label>
            <select name="7f_5" id="f.rotationsriktning">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> g. Gruppledningar </label><br>

            <label>anslutning till centralen </label>
            <select name="7g_1" id="g.anslutning tillcentralen">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>areor</label>
            <select name="7g_2" id="g.areor">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>märkningar</label>
            <select name="7g_3" id="g.märkningar">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>montering</label>
            <select name="7g_4" id="g.montering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> h. Uttag </label><br>

            <label>placering</label>
            <select name="7h_1" id="h.placering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>konstruktion</label>
            <select name="7h_2" id="h.konstruktion">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>rotationsriktning</label>
            <select name="7h_3" id="h.rotationsriktning">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>ledningarnas anslutningar</label>
            <select name="7h_4" id="h.ledningarnas anslutningar">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> i. Armaturer </label><br>

            <label>placering</label>
            <select name="7i_1" id="i.placering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>konstruktion</label>
            <select name="7i_2" id="i.konstruktion">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>ledningarnas anslutningar</label>
            <select name="7i_3" id="i.ledningarnas anslutningar">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> j. Värmeanläggningar </label><br>

            <label>radiatorernas placering och montering</label>
            <select name="7j_1"
                    id="j.radiatorernas placering och montering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>bastuugnens placering och montering</label>
            <select name="7j_2"
                    id="j.bastuugnens placering och montering">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>värmefolieinstallationer</label>
            <select name="7j_3"
                    id="j.värmefolieinstallationer">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br>

            <label>värmekabel installationer</label>
            <select name="7j_4"
                    id="j.värmekabel installationer">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>värmepump installationer</label>
            <select name="7j_5"
                    id="j.värmepump installationer">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> k. Övriga anläggningar </label><br>

            <label>spis</label>
            <select name="7k_1"
                    id="k.spis">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>annat</label>
            <select name="7k_2"
                    id="k.annat">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> l. övriga installationer </label><br>

            <label>telefoninstallationer</label>
            <select name="7l_1"
                    id="l.telefoninstallationer">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>antenninstallationer</label>
            <select name="7l_2"
                    id="l.antenninstallationer">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>övriga teletekniska installationer</label>
            <select name="7l_3"
                    id="l.övriga teletekniska installationer">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> m. Slutritningar </label><br>

            <label>centralschemor</label>
            <select name="7m_1"
                    id="m.centralschemor">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>ledningsschemor</label>
            <select name="7m_2"
                    id="m.ledningsschemor">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>

            <label>bruksanvisningar och skötseldirektiv</label>
            <select name="7m_3"
                    id="m.bruksanvisningar och skötseldirektiv">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select><br><br>

            <label> INSTALLATIONERNA I SKICK </label>
            <select name="installationer"
                    id="INSTALLATIONERNA I SKICK">
                <option value=" "> </option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="0">0</option>
            </select>
            <label> Bilagor </label>
            <select name="bilagor"
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
            <input type="checkbox" id="Kontinuiteten konstaterats genom mätning" name="konstateradKontinuitet"
                   value="Kontinuiteten konstaterats genom mätning">
            <label for="Kontinuiteten konstaterats genom mätning">
                Kontinuiteten konstaterats genom mätning </label><br><br>

            <label> b. Isolationsresistans </label><br>

            <label> Hela centralens isolationsresistans </label>
            <input type="text" name="isolationsresistansHela" id="MΩ">
            <label> MΩ </label><br><br>

            <label> Gruppledningar som bör mätas separat </label><br>
            <label>Grupp nr</label>
            <input type="text" name="grupp1" id="Grupp nr1">

            <label>Isolationsresistans</label>
            <input type="text" name="isolationsResistans1" id="isolationsResistans1"><br>

            <label>Grupp nr</label>
            <input type="text" name="grupp2" id="Grupp nr2">

            <label>Isolationsresistans</label>
            <input type="text" name="isolationsResistans2" id="isolationsResistans2"><br><br>

            <label> c. Konstateras uppfyllande av kraven för automatisk frånkoppling </label><br>

            <input type="radio" id="Konstaterats genom mätning" name="konstatering"
                   value="Konstaterats genom mätning">
            <label for="Konstaterats genom mätning"> Konstaterats genom mätning </label>

            <input type="radio" id="Konstaterats vid planering" name="konstatering"
                   value="Konstaterats vid planering">
            <label for="Konstaterats vid planering"> Konstaterats vid planering </label><br>
            <br>

            <label> Den lägsta kortslutningsströmmen i grupper som mäts separat </label><br>

            <label>Grupp nr</label>
            <input type="text" name="grupp3" id="Grupp nr3">

            <label>lkmin/A</label>
            <input type="text" name="lkmin3" id="lkmin/A3">

            <label>Säkringstyp/storlek </label>
            <input type="text" name="särkringsTyp3" id="Säkringstyp/storlek3"><br>

            <label>Grupp nr</label>
            <input type="text" name="grupp4" id="Grupp nr4">

            <label>lkmin/A</label>
            <input type="text" name="lkmin4" id="lkmin/A4">

            <label>Säkringstyp/storlek </label>
            <input type="text" name="särkringsTyp4" id="Säkringstyp/storlek4"><br><br>

            <label> d. Funktionsprovning för jordfelsbrytare </label><br>

            <label> Fabrikat, Typ, Märkning/beteckning </label>
            <input type="text" name="fabrikat"
                   id=" Fabrikat, Typ, Märkning/beteckning">

            <label>Nominella värden In/IΔn </label>
            <input type="text" name="nominellaVärden" id="Nominella värden In/IΔn "><br>

            <label>Uppmätt funktionsström IΔ </label>
            <input type="text" name="funktionsström" id="Uppmätt funktionsström IΔ ">

            <label>Utlösningstid [ms] </label>
            <input type="text" name="utlösningstid" id="Utlösningstid [ms]4">
            <br><br>


            <label> e. Bilagor som hänför sig till mätningarna ?? st </label><br><br>

            <label>  f. Mätutrustningar som använts: Instrumentet skall
                uppfylla standarden EN 61 557 </label><br>

            <label>Utrustning </label>
            <label>1.</label>
            <input type="text" name="utrustning1" id="Utrustning1">
            <label>2.</label>
            <input type="text" name="utrustning2" id="Utrustning2">
            <label>3.</label>
            <input type="text" name="utrustning3" id="Utrustning3"><br>
            <label>Tillverkare</label>
            <label>1.</label>
            <input type="text" name="tillverkare1" id="Tillverkare1">
            <label>2.</label>
            <input type="text" name="tillverkare2" id="Tillverkare2">
            <label>3.</label>
            <input type="text" name="tillverkare3" id="Tillverkare3"><br>
            <label>Typ </label>
            <label>1.</label>
            <input type="text" name="typ1" id="Typ1">
            <label>2.</label>
            <input type="text" name="typ2" id="Typ2">
            <label>3.</label>
            <input type="text" name="typ3" id="Typ3"><br><br>

            <!--

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
                   name="bristerDatum"><br><br>


            <label> 10. UTFÖRARE AV BESIKTNINGEN</label><br><br>
            <label for="10Namn">Namn:</label>
            <input type="text" name="besiktningsNamn" id="10Namn"><br>

            <label for="Underskrift">Underskrift:</label>
            <input type="text" name="besiktningsUnderskrift" id="Underskrift">

            <label for="date">Tid och plats:</label>
            <input type="date" id="10Tid och plats"
                   name="besiktningsTid">
            <input type="text" name="besiktningsPlats" id="10place"><br><br>


            <label> 11. ELENTREPRENÖR</label><br><br>
            <label for="11Namn">Namn:</label>
            <input type="text" name="elNamn" id="11namn"><br>

            <label for="11Underskrift">Underskrift:</label>
            <input type="text" name="elUnderskrift" id="11Underskrift">

            <label for="date">Tid och plats:</label>
            <input type="date" id="11Tid och plats"
                   name="besiktningsUnderskrift2">
            <input type="text" name="besiktningsPlats2" id="11place"><br><br>

            -->


            <br>
            <input type="submit" id="submit" value="submit">
            <button type="button" onclick="download(this.form)" id="submitbutton">Download</button>

        </form>

    </body>
</html>

