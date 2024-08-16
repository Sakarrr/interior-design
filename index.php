<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex - Interior Design</title>

    <link rel="stylesheet" href="./assets/stylesheet/css/style.css" />

    <!-- Include Poppins font. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Include Ionicons. -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
        <?php
        include './sections/showcase.php';
        echo showcase('row', 'col col-lg-6')
        ?>

        <?php
        include './sections/services.php';
        echo services();
        ?>

        <?php
        include './sections/designers.php';
        echo designers('row', 'col col-lg-4');
        ?>

        <?php
        include './sections/packages.php';
        echo packages('row', 'col col-lg-6');
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

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/fslightbox.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>