<?php
?>

<html>
    <body>
        <h1>You are an admin!</h1>


        <h1>Besiktningar</h1>

        <table>
            <tr>
                <th>Id</th>
                <th>Kundnamn</th>
                <th>Adress</th>
                <th>Status</th>
            </tr>
            <?php if (isset($besiktning)) {  ?>



                <?php
                foreach($besiktning as $entry) {

                    echo '<tr>';
                    echo '<td><a href = "adminBesiktning?id='.$entry["id"].'">'.$entry["id"].'</a></td>';
                    echo '<td>'.$entry["kundNamn"].'</td>';
                    echo '<td>'.$entry["adress"].'</td>';
                    echo '<td>'.$entry["status"].'</td></tr>';

                }
                ?>



            <?php } ?>
            <!--<tr>
                <td><a href="besiktning">Nytt Formulär</a></td>
            </tr>-->
        </table>

        <!-- Fetch all forms from DB -->
    </body>
</html>
