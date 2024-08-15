<?php
function mobile_sidebar()
{
?>
    <div class="interior-mob-navbar">
        <div class="container">
            <div class="row">
                <div class="interior-sidebar-toggle" id="interior-sidebar-toggle">
                    ☰
                </div>
                <div class="interior-branding">
                    Company Name
                </div>
            </div>
        </div>
    </div>

    <div class="interior-mob-sidebar">
        <div class="container">
            <div class="interior-sidebar-close" id="interior-sidebar-close">
                <span>Close Menu</span>
            </div>
            <div class="interior-sidebar-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#interior-showcase">Showcase</a></li>
                    <li><a href="#interior-services">Services</a></li>
                    <li><a href="#interior-designers">Designers</a></li>
                    <li><a href="#interior-packages">Packages</a></li>
                    <li><a href="#interior-contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
<?php
}
