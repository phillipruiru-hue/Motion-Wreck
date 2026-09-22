<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding - gallery</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>

    <section id="section-heading">

        <p class="eyebrow">Weddings</p>
        <h1>The day, exactly as it felt</h1>

    </section>

    <section id="photo-grid">

        

            <img src="assets/wedding-photos/wedding-1.jpg" alt="Wedding girl portrait" class="grid-photo">
            <img src="assets/wedding-photos/wedding-2.jpg" alt="men dancing in wedding dances" class="grid-photo">
            <img src="assets/wedding-photos/wedding-3.jpg" alt="kenyan traditional weding" class="grid-photo">
            <img src="assets/wedding-photos/wedding-4.jpg" alt="kenyan traditional wedding ceremony" class="grid-photo">
            <img src="assets/wedding-photos/wedding-6.jpg" alt="men wedding photo poses" class="grid-photo">
            <img src="assets/wedding-photos/wedding-5.jpg" alt="happy men at a wedding" class="grid-photo">

            <div class="lightbox" id="lightbox">
                <span class="lightbox-close" id="lightboxClose">&times;</span>
                <span class="lightbox-prev" id="lightboxPrev">‹</span>
                <img src="" alt="" class="lightbox-img" id="lightboxImg">
                <span class="lightbox-next" id="lightboxNext">›</span>
            </div>

    </section>

    <div class="nav-back"><a href="galleries.php" class="view-all">Back to all categories →</a></div>

    <script>
        const gridPhotos = Array.from(document.querySelectorAll('.grid-photo'));
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');

        let currentIndex = 0;

        function showImage(index) {
            lightboxImg.src = gridPhotos[index].src;
            currentIndex = index;
        }

        gridPhotos.forEach(function(photo, index) {
            photo.addEventListener('click', function() {
                showImage(index);
                lightbox.classList.add('open');
            });
        });

        lightboxClose.addEventListener('click', function() {
            lightbox.classList.remove('open');
        });

        lightboxNext.addEventListener('click', function() {
            let nextIndex = (currentIndex + 1) % gridPhotos.length;
            showImage(nextIndex);
        });

        lightboxPrev.addEventListener('click', function() {
            let prevIndex = (currentIndex - 1 + gridPhotos.length) % gridPhotos.length;
            showImage(prevIndex);
        });
    </script>
    
</body>
</html>