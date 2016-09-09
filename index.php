<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        session_start();
        include './assets/pages/head.php';
        ?>
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="0">
        <?php
        include './assets/pages/header.php';
        include './assets/pages/main-slider.php';
        include './assets/pages/services.php';
        include './assets/pages/portfolio.php';
        include './assets/pages/customers.php';
        include './assets/pages/about.php';
        include './assets/pages/contacts.php';
        include './assets/pages/footer.php';
        ?>
    </body>
</html>
