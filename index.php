<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion Wreck Studio In Nairobi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Inter:wght@400;500&display=swap">
    <link rel="stylesheet" href="CSS/style.css">
    

</head>

    <body>

        <?php include 'nav.php'; ?>

        <main>

            <section id="hero">

                <div class="landing-text">
                    <h1>Moments, <span class="highlight">softly</span> told</h1>
                    <p>We turn your biggest days into images you'll never stop looking at.</p>
            

                    <div class="hero-buttons">
                        <a href="#" class="primary-btn">Book Your Date</a>
                        <a href="#" class="secondary-btn">View Our Work</a>
                    </div>

                    <p class="stress">Now booking for September — limited weekend slots.</p> <!--later i will advanced and revised text-->
                </div>
                

                <div class="slide-show-wrapper">
                    <div class="slide-show">
                        <img src="assets/wedding.jpg" alt="Wedding Picture" class="active" width="1600" height="900">
                        <img src="assets/baby.png" alt="Pregnant woman - Baby Bump" loading="lazy" width="1600" height="900">
                        <img src="assets/happy.jpg" alt="Happy birthday photo" loading="lazy" width="1600" height="900">
                    </div>
                </div>


            </section>

            <section id="gallery-preview">

                <div class="section-heading">

                    <p class="eyebrow">Explore the work</p>
                    <h2>Find the story that feels like yours.</h2>
                    <p>A small selection of the moments we love to capture.</p>

                </div>

                <div class="gallery-cards">

                    <div class="gallery-card">

                        <img src="assets/wedding.jpg" alt="Wedding Picture">

                        <div class="card-info">

                            <h3>Wedding</h3>
                            <p>The day, exactly as it felt</p>

                            <a href="#">Explore the Gallery →</a>

                        </div>
                    </div>

                    <div class="gallery-card">

                        <img src="assets/baby.png" alt="Pregnant woman - Baby Bump">

                        <div class="card-info">

                            <h3>Baby Bump</h3>
                            <p>Softly held, beautifully remembered</p>

                            <a href="#">Explore the Gallery →</a>

                        </div>
                    </div>

                    <div class="gallery-card">

                        <img src="assets/happy.jpg" alt="Family celebrating a birthday">

                        <div class="card-info">

                            <h3>Birthdays</h3>
                            <p>Joy worth keeping close</p>

                            <a href="#">Explore the Gallery →</a>

                        </div>

                    </div>
                    
                </div>

                <a href="galleries.php" class="view-all">View All Categories →</a>

            </section>

            <script>

                const slides = document.querySelectorAll('.slide-show img');
                let currentIndex = 0;

                setInterval(function(){
                    slides[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % slides.length;
                    slides[currentIndex].classList.add('active');
                }, 4000);

            </script>

        </main>
        
    </body>


</html>