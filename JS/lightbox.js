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