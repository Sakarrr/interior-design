<div class="interior-main">
    <?php include './sections/showcase.php' ?>
    <?php echo showcase('row', 'col col-lg-6');
    ?>
    <?php //echo showcase('grid grid-cols-2', ''); 
    ?>
    <?php include './sections/services.php' ?>
    <?php echo services(); ?>
    <?php
    include './sections/designers.php';
    echo designers('grid grid-cols-3', '');
    ?>
    <?php include './sections/packages.php' ?>
    <?php include './sections/contact.php' ?>
    <?php include './sections/footer.php' ?>
</div>