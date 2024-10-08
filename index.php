<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex - Interior Design</title>

    <?php include './stylesheets.php' ?>
</head>

<div class="id-loader-container">
    <div class="id-loader">
        <div class="id-loader-animation"></div>
        <div class="id-loader-animation"></div>
        <div class="id-loader-animation"></div>
    </div>
</div>

<body>
    <div class="id-overlay id-overlay-main"></div>

    <?php
    include 'sidebar.php';
    echo sidebar();
    ?>

    <?php
    include 'mobile-sidebar.php';
    echo mobile_sidebar();
    ?>

    <div class="id-overlay" id="id-overlay">
    </div>

    <div class="id-main">
        <div class="id-desktop-sidebar-toggle" id="id-sidebar-toggle">
            <div class="id-container">
                <a class="id-toggle-icon">
                    <div class="id-arrow">
                        <div class="id-arrow-line"></div>
                        <div class="id-arrow-chevron"></div>
                    </div>
                </a>
            </div>
        </div>

        <!-- <div class="id-cross" id="id-cross">
            <div class="id-line id-line-one"></div>
            <div class="id-line id-line-two"></div>
        </div>

        <a class="id-hamburger-icon">
            <div class="id-hamburger" id="id-hamburger">
                <div class="id-line id-line-one"></div>
                <div class="id-line id-line-two"></div>
                <div class="id-line id-line-three"></div>
            </div>
        </a> -->

        <?php
        include './sections/showcase.php';
        echo showcase('id-row', 'id-col id-col-sm-6')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('id-row', 'id-col id-col-md-6 id-col-lg-4');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('id-row', 'id-col id-col-lg-6');
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