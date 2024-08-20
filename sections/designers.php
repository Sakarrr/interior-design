<?php function designers($row, $col)
{
?>
    <div class="interior-designers" id="interior-designers">
        <div class="container">
            <h2> Designers. </h2>

            <p>
                The best team in the world.
            </p>

            <p>
                We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
            </p>

            <p><b>Our designers are thoughtfully chosen:</b></p>

            <div class="interior-designers-list">
                <div class="<?php echo $row ?>">
                    <div class="interior-designer-card <?php echo $col ?>">
                        <img src="https://www.w3schools.com/w3images/team2.jpg">
                        <div class="card-content">
                            <h3 class="it-fs-xl">John Doe</h3>
                            <span>CEO & Founder</span>
                            <p>
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                        </div>
                    </div>
                    <div class="interior-designer-card <?php echo $col ?>">
                        <img src="https://www.w3schools.com/w3images/team1.jpg">
                        <div class="card-content">
                            <h3>Jane Doe</h3>
                            <span>Designer</span>
                            <p>
                                Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                            </p>
                        </div>
                    </div>
                    <div class="interior-designer-card <?php echo $col ?>">
                        <img src="https://www.w3schools.com/w3images/team3.jpg">
                        <div class="card-content">
                            <h3>Mike Ross</h3>
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
