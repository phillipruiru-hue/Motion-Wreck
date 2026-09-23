<nav>
    <div class="logo">
        <img src="assets/motion-wreck-logo.svg" alt="logo">
    </div>

    <ul class="mega-space">
        <li>
            <a href="index.php" id="home-link">Motion Wreck Studio</a>
        </li>

        <li>
            <a href="about.php">About Us</a>
        </li>

        <li class="mega">
            <a href="#">Gallary <span class="arrow">˅</span></a>

            <div class="mega-menu">
                <a href="#">Birthday</a>
                <a href="#">Passport</a>
                <a href="#">Weddings</a>
                <a href="#">Events</a>
                <a href="#">Baby Bump</a>
                <a href="#">Corporates</a>
                <a href="#">Family Shoots</a>
                <a href="#">Graduation</a>
            </div>
        </li>

        <li>
            <a href="#">Gowns for Hire</a>
        </li>

        <li>
            <a href="#">Contact Us</a>
        </li>

    </ul>

    <div class="hamburger" id="hamburgerBtn">

        <span></span>
        <span></span>
        <span></span>

    </div>

    <div class="mobile-overlay" id="mobileOverlay"> </div>

    <div class="mobile-panel" id="mobilePanel">
        <div class="close-btn" id="closeBtn">&times;</div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li class="mobile-mega">
                <a href="#">Gallery <span class="arrow">˅</span></a>
                <ul class="mobile-submenu">
                    <li><a href="wedding.php">Weddings</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Portraits</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Video</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        
    </div>

    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const mobilePanel = document.getElementById('mobilePanel');

        hamburgerBtn.addEventListener('click', function(){
            mobilePanel.classList.toggle('open');
            mobileOverlay.classList.toggle('open');
        });


        //mobile 

        const closeBtn = document.getElementById('closeBtn');
        const mobileMega = document.querySelector('.mobile-mega');

        mobileMega.addEventListener('click', function() {
        mobileMega.classList.toggle('open');
        });


        // this function closes the menu on both clicking the mobile x button and taping on the dark overlay.
        function closeMenu() {
        mobilePanel.classList.remove('open');
        mobileOverlay.classList.remove('open');
        }

        closeBtn.addEventListener('click', closeMenu);
        mobileOverlay.addEventListener('click', closeMenu);

    </script>
</nav>

