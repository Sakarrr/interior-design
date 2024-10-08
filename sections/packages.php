<?php
function packages($row, $col)
{
?>
    <div class="id-packages id-section-margin-top" id="interior-packages">
        <div class="id-container">

            <h2 class="id-section-title">Packages.</h2>
            <p class="id-section-description">
                Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure
            </p>
            <div class="id-packages-list">
                <div class="<?php echo $row ?>">
                    <div class="id-package-list <?php echo $col ?>">
                        <ul>
                            <li class="id-fs-xl">
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
                                <button class="id-btn-primary">Sign up</button>
                            </li>
                        </ul>
                    </div>

                    <div class="id-package-list <?php echo $col ?> id-pro">
                        <ul>
                            <li class="id-pro id-fs-xl">
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
                                <button class="id-btn-primary id-btn-bg-primary">Sign up</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
