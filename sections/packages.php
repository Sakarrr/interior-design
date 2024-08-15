<?php
function packages($row, $col)
{
?>
    <div class="interior-packages" id="interior-packages">
        <div class="container">

            <h2>Packages.</h2>
            <p>
                Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure
            </p>
            <div class="packages-list">
                <div class="<?php echo $row ?>">
                    <div class="package-list <?php $col ?>">
                        <ul>
                            <li>
                                Basic
                            </li>
                            <li>
                                FloorPlanning
                            </li>
                            <li>
                                10 hours support
                            </li>
                            <li>
                                Photography
                            </li>
                            <li>
                                20% furniture discount
                            </li>
                            <li>
                                Good deals
                            </li>
                            <li>
                                <h3>$ 199</h3>
                                <span>per room</span>
                            </li>
                            <li>
                                <a href="#" class="button">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="package-list <?php $col ?> pro">
                        <ul>
                            <li class="pro">
                                Pro
                            </li>
                            <li>
                                FloorPlanning
                            </li>
                            <li>
                                50 hours support
                            </li>
                            <li>
                                Photography
                            </li>
                            <li>
                                50% furniture discount
                            </li>
                            <li>
                                GREAT deals
                            </li>
                            <li>
                                <h3>$ 249</h3>
                                <span>per room</span>
                            </li>
                            <li>
                                <a href="#" class="button pro">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
