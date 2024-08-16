<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid - Interior Design</title>

    <?php include './stylesheets.php' ?>
</head>

<div class="loader-container">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<body>
    <div class="overlay main"></div>

    <?php
    include 'sidebar.php';
    echo sidebar();
    ?>

    <?php
    include 'mobile-sidebar.php';
    echo mobile_sidebar();
    ?>

    <div class="overlay" id="overlay">
    </div>

    <div class="interior-main">
        <div class="open-sidebar" id="open-sidebar">
            <div class="container">
                <a class="sidebar-toggle">
                    <div class="interior-arrow">
                        <div class="line"></div>
                        <div class="chevron"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php
        include './sections/showcase.php';
        echo showcase('grid grid-cols-2', '')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('grid grid-cols-3', '');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('grid grid-cols-2', '');
        ?>

        <?php
        include './sections/contact.php';
        echo contact();
        ?>

        <?php
        include './sections/footer.php';
        echo footer();
        ?>
    </div>

    <?php include './scripts.php' ?>
</body>

</html>