<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float - Interior Design</title>

    <?php include './stylesheets.php' ?>
</head>

<div class="id-loader-container">
    <div class="id-loader">
        <div class="id-loader-animation"></div>
        <div class="id-loader-animation"></div>
        <div class="id-loader-animation"></div>
    </div>
</div>

<body class="container-center">
    <div class="id-overlay main"></div>

    <?php
    include 'navbar.php';
    echo navbar();
    ?>

    <?php
    include 'mobile-sidebar.php';
    echo mobile_sidebar();
    ?>

    <div class="id-overlay" id="id-overlay"></div>
    <div class="id-main">
        <?php
        include './sections/showcase.php';
        echo showcase('f-row', 'f-col f-col-lg-6')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('f-row', 'f-col f-col-md-6 f-col-lg-4');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('f-row', 'f-col f-col-lg-6');
        ?>

        <?php
        include './sections/contact.php';
        echo contact();
        ?>
    </div>

    <?php
    include './footer.php';
    echo footer();
    ?>

    <?php include './scripts.php' ?>
</body>

</html>