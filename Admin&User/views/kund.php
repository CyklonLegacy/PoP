<?php
?>

<html>
    <body>
        <h1>Welcome <?= $username ?>!</h1>


        <!-- Fetch all forms from DB with same user id -->
        <h2>Dina Besiktningar</h2>
        <table>
            <tr>
                <th>Address</th>
                <th>Status</th>
                <!--<th>Datum Införd</th>-->
            </tr>
        <?php if (isset($besiktning)) {  ?>



            <?php
            foreach($besiktning as $entry) {

                echo '<tr>';
                echo '<td>'.$entry["adress"].'</td>';
                echo '<td>'.$entry["status"].'</td></tr>';

                //echo "<td>" . date('d-m-Y', strtotime($entry["date"])) . "</td></tr>";
            }
            ?>



        <?php } ?>
            <tr>
                <td><a href="besiktning">Nytt Formulär</a></td>
            </tr>
        </table>

        <!-- Fetch all forms from DB with same user id -->
        <?php if (isset($fastighet)) {  ?>

            <h2>Dina Fastigheter</h2>

            <table>
                <th>Address</th>
                <th>Status</th>
                <th>Datum Införd</th>


                <?php
                foreach($fastighet as $entry) {
                    echo '<tr>';
                    echo '<td>'.$entry["id"].'</td>';
                    echo '<td>'.$entry["status"].'</td>';
                }
                ?>

            </table>

        <?php } ?>

        <!--<h2><a href="besiktning">Nytt Formulär</a></h2>-->
        <!-- Allow user to create new form -->
    </body>
</html>
