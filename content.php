<div class="interior-main">
    <?php
    include './sections/showcase.php';
    echo showcase('row', 'col col-lg-6');
    //echo showcase('grid grid-cols-2', '');
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