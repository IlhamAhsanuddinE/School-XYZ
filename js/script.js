const images = document.querySelectorAll('.slider img');
let currentIndex = 0;

function showNextImage() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % images.length; // Looping ke gambar pertama setelah gambar terakhir
    images[currentIndex].classList.add('active');
}

setInterval(showNextImage, 5000); // Ganti gambar setiap 5 detik
