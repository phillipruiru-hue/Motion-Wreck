<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <?php include "nav.php"; ?>

    <main class="split">

        <section id="vedio-reels">
            
                <div class="video-wrappers" id="videoWrapper">

                    <video id="reelVideo" poster="assets/video-poster.jpg">

                        <source src="assets/highlight-reel.mp4" type="video/mp4">

                    </video>

                    <div class="play-button" id="playButton">▶</div>

                </div>

        </section>

        <section class="body">

            <form class="contact-form" action="#" method="post">
 
                <div class="field">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" autocomplete="name" required>
                </div>
 
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required>
                </div>
 
                <div class="field">
                    <label for="shoot">Type of shoot</label>
                    <select id="shoot" name="shoot" required>
                        <option value="" disabled selected></option>
                        <option>Wedding</option>
                        <option>Portrait</option>
                        <option>Event</option>
                        <option>Commercial</option>
                        <option>Other</option>
                    </select>
                </div>
 
                <div class="field">
                    <label for="vision">Your vision</label>
                    <textarea id="vision" name="vision"></textarea>
                </div>
 
                <button type="submit">Send inquiry</button>
 
            </form>

        </section>

    </main>

    
        <?php include "footer.php";?>

        
            <script>

                //vedio js code

                const playButton = document.getElementById('playButton');
                const reelVideo = document.getElementById('reelVideo');

                playButton.addEventListener('click', function() {
                    reelVideo.controls = true;
                    reelVideo.play();
                    playButton.classList.add('hidden');
                });

            </script>
</body>
</html>