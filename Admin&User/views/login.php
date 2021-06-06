<?php

?>

<html>
    <body>
        <form action="<?= $_SERVER["SCRIPT_NAME"]?>/login" method="post">
            <label>Username</label>
            <input type="text" id="username" name="username" value=""><br>
            <label>Password</label>
            <input type="password" id="password" name="password" value=""><br>
            <input type="submit" id="submit" value="Login">
        </form>

        <!--<p>Dont have an account? <a href="register">Register here</a>.</p>-->

        <?php if (isset($error)) { ?>
            <br>
            <div style="color: red">
                <?= empty($error) ? "" : $error ?>
            </div>
        <?php } ?>
    </body>
</html>
