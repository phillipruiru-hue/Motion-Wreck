<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gowns to hire in Nairobi</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php include "nav.php"; ?>

    <main>

        <section id="section-heading">
            <h1 class="gowns-title">Gowns For Hire</h1>
            <p class="gowns-intro">Wear something unforgettable for your shoot or your big day. Hire a gown, we’ll help you get the fit right.</p>
        </section>

        <!-- DESKTOP FILTER (hidden on mobile by CSS) -->

        <section id="filter">

            <div class="gowns-t">
                <button type="button" class="active" data-type="category" data-value="all">All gowns</button>
                <button type="button" data-type="category" data-value="birthday">Birthday</button>
                <button type="button" data-type="category" data-value="passport">Passport</button>
                <button type="button" data-type="category" data-value="wedding">Weddings</button>
                <button type="button" data-type="category" data-value="event">Events</button>
                <button type="button" data-type="category" data-value="baby-bump">Baby Bump</button>
                <button type="button" data-type="category" data-value="corporates">Corporates</button>
                <button type="button" data-type="category" data-value="family">Family Shoots</button>
                <button type="button" data-type="category" data-value="graduation">Graduation</button>
            </div>

            <div class="size-t">
                <button type="button" class="active" data-type="gender" data-value="all">Everyone</button>
                <button type="button" data-type="gender" data-value="male">Male</button>
                <button type="button" data-type="gender" data-value="female">Female</button>
                <button type="button" data-type="gender" data-value="child">Child</button>
            </div>

        </section>

        <!-- MOBILE FILTER (hidden on desktop by CSS) -->

        <section class="filter-mobile">

            <div class="gowns-mobile-filter">

                <div class="dropdown" data-type="category">
                    <button type="button" class="dropdown-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Category">
                        <span class="dropdown-label">All gowns</span>
                    </button>
                    <ul class="dropdown-list" role="listbox" hidden>
                        <li role="option" data-value="all" aria-selected="true">All gowns</li>
                        <li role="option" data-value="birthday">Birthday</li>
                        <li role="option" data-value="passport">Passport</li>
                        <li role="option" data-value="wedding">Weddings</li>
                        <li role="option" data-value="event">Events</li>
                        <li role="option" data-value="baby-bump">Baby Bump</li>
                        <li role="option" data-value="corporates">Corporates</li>
                        <li role="option" data-value="family">Family Shoots</li>
                        <li role="option" data-value="graduation">Graduation</li>
                    </ul>
                </div>

                <div class="dropdown" data-type="gender">
                    <button type="button" class="dropdown-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Gown for">
                        <span class="dropdown-label">Everyone</span>
                    </button>
                    <ul class="dropdown-list" role="listbox" hidden>
                        <li role="option" data-value="all" aria-selected="true">Everyone</li>
                        <li role="option" data-value="male">Male</li>
                        <li role="option" data-value="female">Female</li>
                        <li role="option" data-value="child">Children</li>
                    </ul>
                </div>

            </div>

        </section>

        <!-- CARDS: each one needs data-category and data-gender -->

        <section class="gowns-cards">

            <article data-category="corporates" data-gender="male">

                <div class="card-media">
                    <span class="filter-tag">Corporates</span>
                    <img src="assets/gown-cards/Official Suit.png" alt="Official suit">
                </div>

                <div class="info">
                    <h3 class="card-h3">Official Suit</h3>
                    <p class="men-size">size [32-48]</p>
                    <p class="price"><span class="kes">KSH</span> 5500</p>
                    <a href="#" class="calender">Check date</a>
                </div>

            </article>

            <!-- + another card -->

            <article data-category="wedding" data-gender="female">

                <div class="card-media">
                    <span class="filter-tag">Weddings</span>
                    <img src="assets/gown-cards/White Wedding Gown.png" alt="White wedding gown">
                </div>

                <div class="info">
                    <h3 class="card-h3">White Wedding Gown</h3>
                    <p class="men-size">size [6-18]</p>
                    <p class="price"><span class="kes">KSH</span> 7500</p>
                    <a href="#" class="calender">Check date</a>
                </div>

            </article>

            
            <!-- + Birthday card -->

            <article data-category="birthday" data-gender="female">

                <div class="card-media">
                    <span class="filter-tag">Birthday</span>
                    <img src="assets/gown-cards/Birthday.png" alt="Birthday gown">
                </div>

                <div class="info">
                    <h3 class="card-h3">Birthday Gown</h3>
                    <p class="men-size">size [m , l , xl , 2xl ]</p>
                    <p class="price"><span class="kes">KSH</span> 3400</p>
                    <a href="#" class="calender">Check date</a>
                </div>

            </article>


            <article data-category="birthday" data-gender="female">

                <div class="card-media">
                    <span class="filter-tag">Birthday</span>
                    <img src="assets/gown-cards/Birthday-child.png" alt="Birthday gown">
                </div>

                <div class="info">
                    <h3 class="card-h3">Birthday Gown-Children</h3>
                    <p class="men-size">size [m , l , xl]</p>
                    <p class="price"><span class="kes">KSH</span> 1900</p>
                    <a href="#" class="calender">Check date</a>
                </div>

            </article>
                        
            <!-- + Familly shoot card -->

            <article data-category="family" data-gender="everyone">

                <div class="card-media">
                    <span class="filter-tag">Familly Shoot</span>
                    <img src="assets/gown-cards/family.png" alt="Familly shoot gown">
                </div>

                <div class="info">
                    <h3 class="card-h3">Familly Shoot Gown</h3>
                    <p class="men-size">size [ all sizes available ]</p>
                    <p class="price"><span class="kes">KSH</span> 3400</p>
                    <a href="#" class="calender">Check date</a>
                </div>

            </article>

            
        </section>

        <p id="no-results" class="gowns-intro" hidden>No gowns match these filters yet. Try another category.</p>

        <?php include "footer.php"; ?>

    </main>

    <script src="JS/gowns.js"></script>
</body>
</html>