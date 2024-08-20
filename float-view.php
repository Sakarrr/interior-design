<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float - Interior Design</title>

    <?php include './stylesheets.php' ?>
</head>

<div class="loader-container">
    <div class="loader">
        <div class="loader-animation"></div>
        <div class="loader-animation"></div>
        <div class="loader-animation"></div>
    </div>
</div>

<body class="container-center">
    <div class="overlay main"></div>

    <?php
    include 'navbar.php';
    echo navbar();
    ?>

    <?php
    include 'mobile-sidebar.php';
    echo mobile_sidebar();
    ?>

    <div class="overlay" id="overlay"></div>
    <div class="interior-main">
        <?php
        include './sections/showcase.php';
        echo showcase('f-row', 'f-col f-col-6')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('f-row', 'f-col f-col-4');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('f-row', 'f-col f-col-6');
        ?>

        <?php
        include './sections/contact.php';
        echo contact();
        ?>
    </div>

    <?php
    include './sections/footer.php';
    echo footer();
    ?>

    <?php include './scripts.php' ?>
</body>

</html>