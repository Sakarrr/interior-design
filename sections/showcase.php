<?php
function showcase($row, $col)
{
?>
    <div class="id-showcase id-section-margin-top" id="interior-showcase">
        <div class="id-container">
            <h1 class="id-heading it-fs-xxl">
                Interior Design
            </h1>
            <h2 class="id-showcase-heading"> Showcase. </h2>
            <div class="id-showcase-photogrid">
                <div class="<?php echo $row ?>">
                    <div class="photo <?php echo $col ?>">
                        <a data-fslightbox href="https://images.pexels.com/photos/27702855/pexels-photo-27702855/free-photo-of-amigo.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"><img src="https://images.pexels.com/photos/27702855/pexels-photo-27702855/free-photo-of-amigo.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></img></a>
                    </div>
                    <div class="photo <?php echo $col ?>">
                        <a data-fslightbox href="https://images.pexels.com/photos/745081/pexels-photo-745081.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"><img src="https://images.pexels.com/photos/745081/pexels-photo-745081.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></img></a>
                    </div>
                    <div class="photo <?php echo $col ?>">
                        <a data-fslightbox href="https://www.w3schools.com/w3images/diningroom.jpg"><img src="https://www.w3schools.com/w3images/diningroom.jpg"></img></a>
                    </div>
                    <div class="photo <?php echo $col ?>">
                        <a data-fslightbox href="https://images.pexels.com/photos/27647759/pexels-photo-27647759/free-photo-of-a-person-holding-a-candle-in-the-dark.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"><img src="https://images.pexels.com/photos/27647759/pexels-photo-27647759/free-photo-of-a-person-holding-a-candle-in-the-dark.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></img></a>
                    </div>
                    <div class="photo <?php echo $col ?>">
                        <a data-fslightbox href="https://images.pexels.com/photos/27000784/pexels-photo-27000784/free-photo-of-three-men-are-pulling-a-net-on-the-beach.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"><img src="https://images.pexels.com/photos/27000784/pexels-photo-27000784/free-photo-of-three-men-are-pulling-a-net-on-the-beach.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></img></a>
                    </div>
                    <div class="photo <?php echo $col ?>">
                        <a data-fslightbox href="https://images.pexels.com/photos/18964530/pexels-photo-18964530/free-photo-of-table-and-two-chairs-standing-on-a-balcony-in-saigon-vietnam.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"><img src="https://images.pexels.com/photos/18964530/pexels-photo-18964530/free-photo-of-table-and-two-chairs-standing-on-a-balcony-in-saigon-vietnam.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 "></img></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
}
?>