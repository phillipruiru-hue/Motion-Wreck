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

            <!-- Homepage gallery -->

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

                            <a href="wedding.php">Explore the Gallery →</a>

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


            <!-- Homepage Testimonials  -->

            <section id="testimonials">

                <div class="section-heading">

                    <p class="eyebrow">What Clients Say</p>
                    <h2>Moments they still talk about</h2>

                </div>

                <div class="testimonial-cards">

                    <div class="testimonial-card">

                        <p class="quote-mark">"</p>
                        <p class="quote-text">They made us feel so at ease — the photos still bring us right back to that day.</p>
                        <p class="quote-author">— Amina & David, Wedding</p>

                    </div>

                    <div class="testimonial-card">

                        <p class="quote-mark">"</p>
                        <p class="quote-text">Gentle, patient, and the maternity photos turned out more beautiful than I imagined.</p>
                        <p class="quote-author">— Wanjiru M., Baby Bump</p>

                    </div>

                    <div class="testimonial-card">

                        <p class="quote-mark">"</p>
                        <p class="quote-text">Every candid moment from the party was captured — even the ones we missed ourselves.</p>
                        <p class="quote-author">— The Otieno Family, Birthday</p>

                    </div>

                </div>

            </section>

            <!-- vedio player section only plays on click i will place a poster but when its clicked thats when it can now start playing  -->

            <section id="video-reel">

                <div class="section-heading">

                    <p class="eyebrow">In Motion</p>
                    <h2>See it come alive</h2>

                </div>

                <div class="video-wrapper" id="videoWrapper">

                    <video id="reelVideo" poster="assets/video-poster.jpg">

                        <source src="assets/highlight-reel.mp4" type="video/mp4">

                    </video>

                    <div class="play-button" id="playButton">▶</div>

                </div>

            </section>

            <!-- about us teaser -->

            <section id="about-teaser">

                <div class="about-photo">

                    <img src="assets/team-photo.jpg" alt="Motion Wreck team at a shoot">

                </div>

                <div class="about-text">

                    <p class="eyebrow">Who We Are</p>
                    <h2>Why we do this</h2>
                    <p>We don't just show up with a camera — we study how you move, how you laugh, what makes a moment feel like *you*. Every shoot starts with a conversation, not a checklist.</p>

                    <a href="about.php" class="view-all">Learn More About Us →</a>

                </div>

            </section>

            <section id="final-cta">

                <h2>Your story deserves more than a phone gallery.</h2>

                <div class="cta-buttons">

                    <a href="#" class="primary-btn btn">Book Us Now</a>
                    <a href="packages.php" class="view-all">View Packages →</a>

                </div>

            </section>

            <?php include 'footer.php';?>

            <script>

                //vedio js code

                const playButton = document.getElementById('playButton');
                const reelVideo = document.getElementById('reelVideo');

                playButton.addEventListener('click', function() {
                    reelVideo.controls = true;
                    reelVideo.play();
                    playButton.classList.add('hidden');
                });

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