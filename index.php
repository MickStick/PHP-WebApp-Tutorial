<?php
    include("controller/MainController.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("partials/head.php");
    ?>
</head>
<header>
    <?php
        include("partials/header.php");
    ?>
</header>
<body>
<iframe name="RequestHandler" ></iframe>
    <main>
        <?php
            include($appview);
        ?>
    </main>
</body>
</html>