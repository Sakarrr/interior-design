<?php function designers($row, $col)
{
?>
    <div class="id-designers id-section-margin-top" id="interior-designers">
        <div class="id-container">
            <h2 class="id-section-title"> Designers. </h2>

            <p class="id-section-description">
                The best team in the world.
            </p>

            <p class="id-section-description">
                We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
            </p>

            <p class="id-section-description"><b>Our designers are thoughtfully chosen:</b></p>

            <div class="id-designers-list">
                <div class="<?php echo $row ?>">
                    <div class="id-designer-card <?php echo $col ?>">
                        <img src="https://www.w3schools.com/w3images/team2.jpg">
                        <div class="card-content">
                            <h3 class="id-fs-xl">John Doe</h3>
                            <span>CEO & Founder</span>
                            <p>
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                        </div>
                    </div>
                    <div class="id-designer-card <?php echo $col ?>">
                        <img src="https://www.w3schools.com/w3images/team1.jpg">
                        <div class="card-content">
                            <h3 class="id-fs-xl">Jane Doe</h3>
                            <span>Designer</span>
                            <p>
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                        </div>
                    </div>
                    <div class="id-designer-card <?php echo $col ?>">
                        <img src="https://www.w3schools.com/w3images/team3.jpg">
                        <div class="card-content">
                            <h3 class="id-fs-xl">Mike Ross</h3>
                            <span>Architect</span>
                            <p>
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
}
